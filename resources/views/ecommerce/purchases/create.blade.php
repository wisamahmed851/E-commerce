@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Purchase</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('purchase.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Product:</label>
                            <select name="product_id" class="form-select" required>
                                <option value="" disabled selected>Select a product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Supplier:</label>
                            <select name="supplier_id" class="form-select" required>
                                <option value="" disabled selected>Select a supplier</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Purchase Price:</label>
                            <input type="number" step="0.01" name="purchase_price" class="form-control" placeholder="Enter purchase price" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Discount:</label>
                            <input type="number" step="0.01" name="discount" class="form-control" placeholder="Enter discount">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantity:</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Add Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
