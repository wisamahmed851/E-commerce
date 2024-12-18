<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\PurchaseProduct;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
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

    $data['final_price'] = $data['purchase_price'] - $data['discount'];
    $data['total_cost'] = $data['final_price'] * $data['quantity'];

    PurchaseProduct::create($data);

    $stock = Stock::firstOrNew(['product_id' => $data['product_id']]);
    $stock->quantity = $stock->quantity + $data['quantity'];
    $stock->save();

    return back()->with('success', 'Purchase recorded and stock updated.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
