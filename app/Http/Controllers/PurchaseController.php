<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseProduct;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf as PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch purchase data with related product and supplier
        $purchases = Purchase::with(['products', 'supplier'])->get();

        return view('ecommerce.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::with('images')->get(); // Load products with images
        $suppliers = Supplier::all();
        return view('ecommerce.purchases.create', compact('products', 'suppliers'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'supplier_id' => 'required',
            'products' => 'required|array',
            'products.*.product_id' => 'required|integer',
            'products.*.quantity' => 'required|integer',
            'products.*.purchase_price' => 'required|numeric',
            'products.*.discount' => 'nullable|numeric',
        ]);

        // Create the purchase record
        $purchase = Purchase::create([
            'supplier_id' => $data['supplier_id'],
        ]);

        foreach ($data['products'] as $productData) {
            $productData['purchase_id'] = $purchase->id;
            $productData['supplier_id'] = $purchase->supplier_id; // Add this line
            $productData['final_price'] = $productData['purchase_price'] - ($productData['discount'] ?? 0);
            $productData['total_cost'] = $productData['final_price'] * $productData['quantity'];

            PurchaseProduct::create($productData);

            // Update stock
            $stock = Stock::firstOrNew(['product_id' => $productData['product_id']]);
            $stock->quantity += $productData['quantity'];
            $stock->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Purchase recorded and stock updated successfully.',
        ]);
    }




    public function viewReceipt($id)
{
    // Eager load 'products' and 'supplier' relationships, and also 'product' for each purchase
    $purchase = Purchase::with(['products.product', 'supplier'])->findOrFail($id);
    return view('ecommerce.purchases.partials.receipt', compact('purchase'));
}


    public function downloadReceipt($id)
    {
        // Fetch the purchase with its related products
        $purchase = Purchase::with(['products', 'supplier'])->findOrFail($id);
        $pdf = PDF::loadView('ecommerce.purchases.partials.receipt', compact('purchase'));
        return $pdf->download('receipt_' . $id . '.pdf');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the purchase by ID
        $purchase = PurchaseProduct::findOrFail($id);
        $products = Product::all(); // Fetch all products
        $suppliers = Supplier::all(); // Fetch all suppliers

        return view('ecommerce.purchases.edit', compact('purchase', 'products', 'suppliers'));
    }

    public function update(Request $request, string $id)
    {
        // Validate the input
        $data = $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'purchase_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'quantity' => 'required|integer'
        ]);

        // Find the existing purchase
        $purchase = PurchaseProduct::findOrFail($id);

        // Store old quantity to adjust stock correctly
        $oldQuantity = $purchase->quantity;

        // Calculate final price and total cost
        $data['final_price'] = $data['purchase_price'] - ($data['discount'] ?? 0);
        $data['total_cost'] = $data['final_price'] * $data['quantity'];

        // Update the purchase record
        $purchase->update($data);

        // Update stock based on the difference in quantity
        $stock = Stock::firstOrNew(['product_id' => $data['product_id']]);

        // Adjust stock: Subtract old quantity and add new quantity
        $stock->quantity = $stock->quantity - $oldQuantity + $data['quantity'];

        // Save the updated stock
        $stock->save();

        // Return AJAX response
        return response()->json([
            'status' => 'success',
            'message' => 'Purchase updated and stock adjusted successfully.'
        ]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
