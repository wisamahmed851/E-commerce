<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    //

    public function create()
    {
        $categories = Category::whereNotNull('parent_id')->get();
        return view('ecommerce.product.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0|lt:price',
            'description' => 'string',
            'product_status' => 'required|in:active,inactive',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ]);
        }

        $validated = $validator->validated();

        // Create the product
        $product = Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'discounted_price' => $validated['discounted_price'] ?? null,
            'description' => $validated['description'],
            'product_status' => $validated['product_status'],
            'category_id' => $validated['category_id'],
        ]);

        // Handle file uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Product added successfully!',
        ]);
    }



    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('ecommerce.product.list', compact('products'));
    }

    public function getProductsData()
    {
        $products = Product::with(['category', 'images'])->get();

        return DataTables::of($products)
            ->addColumn('images', function ($product) {
                // Fetch the first image from the related product_images table
                $firstImage = $product->images->first()->image_path ?? 'default-image.jpg'; // Fallback image
                return '<img src="/storage/' . $firstImage . '" alt="Product Image" width="50" height="50" style="object-fit: cover;">';
            })
            ->addColumn('category', function ($product) {
                return $product->category->name ?? 'N/A';
            })
            ->addColumn('status', function ($product) {
                return $product->product_status;
            })
            ->addColumn('actions', function ($product) {
                $editUrl = route('products.edit', $product->id);
                $showUrl = route('products.show', $product->id);

                return '<div class="btn-group">
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="' . $editUrl . '" class="dropdown-item">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item view-details" data-id="' . $product->id . '">
                                <i class="fas fa-info-circle"></i> Details
                            </button>
                        </li>
                    </ul>
                </div>';
            })

            ->rawColumns(['images', 'actions']) // Allow raw HTML for these columns
            ->make(true);
    }


    public function toggleStatus(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Find the product
        $product->product_status = $product->product_status === 'active' ? 'inactive' : 'active'; // Toggle status
        $product->save(); // Save changes

        return response()->json([
            'status' => 'success',
            'message' => 'Product status updated successfully!',
            'data' => [
                'newStatus' => $product->product_status,
            ],
        ]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id); // Retrieve the product by ID
        $categories = Category::all(); // Retrieve all categories
        $productImages = ProductImage::where('product_id', $id)->get(); // Get associated images

        return view('ecommerce.product.edit', compact('product', 'categories', 'productImages'));
    }

    public function update(Request $request, $id): JsonResponse
    {
        try {
            $product = Product::findOrFail($id);
            // Handle removed images
            // Handle image removal
            if ($request->has('removed_images')) {
                $removedImages = json_decode($request->input('removed_images'), true);
                foreach ($removedImages as $imageId) {
                    $image = ProductImage::find($imageId);
                    if ($image) {
                        // Delete the image file from storage
                        Storage::delete($image->image_path);
                        $image->delete(); // Remove record from the database
                    }
                }
            }

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric|min:0',
                    'discounted_price' => 'nullable|numeric|min:0|lt:price',
                    'description' => 'required|string',
                    'product_status' => 'required|in:active,inactive',
                    'category_id' => 'required|exists:categories,id',
                    'images.*' => 'image|max:1048',
                ]
            );

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'warning',
                    'message' => $validator->errors()->all(),
                ]);
            }

            $validated = $validator->validated();

            // Update the product's details
            $product->update([
                'name' => $validated['name'],
                'price' => $validated['price'],
                'discounted_price' => $validated['discounted_price'] ?? null,
                'description' => $validated['description'],
                'product_status' => $validated['product_status'],
                'category_id' => $validated['category_id'],
            ]);

            // Handle new image uploads
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('products', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path,
                    ]);
                }
            }


            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully!',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ]);
        }
    }
    public function show($id)
    {
        $product = Product::with('images')->find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found',
            ]);
        }

        // Return product data to be displayed in the modal
        return response()->json([
            'status' => 'success',
            'product' => $product
        ]);
    }









    public function grid()
    {
        return view('ecommerce.product.grid');
    }
    public function details()
    {
        return view('ecommerce.product.details');
    }
}
