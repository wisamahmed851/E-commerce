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



    public function index(Request $request)
    {
        $products = Product::with(['category', 'images'])->get();


        return view('ecommerce.product.list', compact('products'));
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }




    public function category()
    {
        return $this->belongsTo(Category::class);
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
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }
        return response()->json(['status' => 'success', 'product' => $product]);
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
