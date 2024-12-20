<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        // Fetch supplier data
        $purchase = PurchaseProduct::all();

        // Fetch purchase data
        $purchases = PurchaseProduct::all(); // Replace with relevant model and query

        return view('ecommerce.purchases.index', compact('purchase', 'purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('ecommerce.purchases.create', compact('products', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'purchase_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'quantity' => 'required|integer'
        ]);

        // Calculate final price and total cost
        $data['final_price'] = $data['purchase_price'] - ($data['discount'] ?? 0);
        $data['total_cost'] = $data['final_price'] * $data['quantity'];

        // Create the purchase record
        PurchaseProduct::create($data);

        // Update stock
        $stock = Stock::firstOrNew(['product_id' => $data['product_id']]);
        $stock->quantity += $data['quantity'];
        $stock->save();

        // Return AJAX response
        return response()->json([
            'status' => 'success',
            'message' => 'Purchase recorded and stock updated successfully.'
        ]);
    }


    public function viewReceipt($id)
    {
        $purchase = PurchaseProduct::findOrFail($id); // Ensure the ID exists
        return view('ecommerce.purchases.partials.receipt', compact('purchase'));
    }

    public function downloadReceipt($id)
    {
        $purchase = PurchaseProduct::findOrFail($id);
        $pdf = PDF::loadView('ecommerce.purchases.partials.receipt', compact('purchase'));
        return $pdf->download('receipt_' . $id . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
