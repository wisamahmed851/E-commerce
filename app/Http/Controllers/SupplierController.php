<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        //
        return view('ecommerce.suppliers.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ecommerce.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string|max:500',
        ]);

        // Create a new supplier record
        $supplier = Supplier::create($data);

        // Return a success response in JSON
        return response()->json([
            'status' => 'success',
            'message' => 'Supplier added successfully!',
            'supplier' => $supplier // Optionally, you can return the created supplier data
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function suppSho($id)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
             return response()->json([
            'status' => 'success',
            'supplier' => $supplier,
        ]);
        }

        return response()->json([
            'status' => 'success',
            'supplier' => $supplier,
        ]);
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
