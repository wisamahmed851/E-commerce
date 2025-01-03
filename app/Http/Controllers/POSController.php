<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class POSController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::all(); // Get all products
        return view('ecommerce.pos.transactions', compact('transactions'));
    }

    public function create()
    {
        // Get all available products
        $products = Product::all();
        return view('ecommerce.pos.create', compact('products'));
    }
    // Handle Transaction
    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'payment_method' => 'required|in:cash,card,online',
                'products' => 'required|array|min:1',
                'products.*.product_id' => 'required|exists:products,id',
                'products.*.quantity' => 'required|integer|min:1',
                'products.*.discount' => 'nullable|numeric|min:0',
            ]);

            // Start database transaction
            DB::beginTransaction();

            // Create the main transaction
            $transaction = Transaction::create([
                'total_amount' => 0, // Will calculate later
                'payment_method' => $validated['payment_method'],
            ]);

            $totalAmount = 0;

            // Loop through products and create transaction details
            foreach ($validated['products'] as $product) {
                $productModel = Product::find($product['product_id']);

                // Get product price
                $price = $productModel->price;

                // Calculate discount and total for the product
                $discount = $product['discount'] ?? 0;
                $quantity = $product['quantity'];
                $subtotal = ($price - $discount) * $quantity;


                // Create transaction detail
                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $product['product_id'],
                    'quantity' => $quantity,
                    'price' => $price,
                    'discount' => $discount,
                    'total_price' => $subtotal,
                ]);
                $totalAmount += $subtotal;
            }

            // Update the total amount in the transaction
            $transaction->update(['total_amount' => $totalAmount]);

            // Commit the database transaction
            DB::commit();

            // Return a success response for AJAX
            return response()->json([
                'status' => 'success',
                'message' => 'Transaction added successfully!',
            ]);
        } catch (\Exception $e) {
            // Rollback on failure
            DB::rollBack();

            // Return an error response for AJAX
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function viewReceipt($id)
    {
        $transaction = Transaction::with('details.product')->findOrFail($id);
        return view('ecommerce.pos.partials.receipt', compact('transaction'));
    }
    public function downloadReceipt($id)
    {
        $transaction = Transaction::with('details.product')->findOrFail($id);
        $pdf = PDF::loadView('ecommerce.pos.partials.receipt', compact('transaction'));
        return $pdf->download('receipt_' . $id . '.pdf');
    }
    public function detailsShow()
    {
        $transactions = Transaction::with('details.product')->get();
        return view('ecommerce.pos.transactionDetail', compact('transactions'));
    }
    public function fetchDetail($id)
    {

        $transactionDetail = TransactionDetail::with('product', 'transaction')->findOrFail($id);
        return response()->json($transactionDetail);
    }
    public function updateDetail(Request $request, $id)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|integer|min:1',
                'discount' => 'nullable|numeric|min:0',
            ]);

            // Fetch the transaction detail
            $transactionDetail = TransactionDetail::findOrFail($id);

            // Fetch the product
            $product = Product::findOrFail($validated['product_id']);

            // Calculate new values
            $price = $product->price;
            $discount = $validated['discount'] ?? 0;
            $quantity = $validated['quantity'];
            $totalPriceAfterDiscount = ($price - $discount) * $quantity;

            // Update transaction detail
            $transactionDetail->update([
                'product_id' => $validated['product_id'],
                'quantity' => $quantity,
                'price' => $price,
                'discount' => $discount,
                'total_price_after_discount' => $totalPriceAfterDiscount,
            ]);

            // Update the total amount in the parent transaction
            $transaction = $transactionDetail->transaction;
            $transaction->total_amount = $transaction->details->sum(function ($detail) {
                return $detail->total_price_after_discount;
            });
            $transaction->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Transaction detail updated successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
