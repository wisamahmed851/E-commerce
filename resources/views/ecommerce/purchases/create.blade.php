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
                    <form id="createPurchase" method="POST">
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
    <!--end main wrapper-->

    {{-- For AJAX --}}
    <script>
        $(document).ready(function() {
            $('#createPurchase').on('submit', function(e) {
                e.preventDefault();

                // Create a new FormData object for the AJAX request
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('purchase.store') }}', // Route for storing purchases
                    method: 'POST',
                    data: formData,
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting Content-Type header
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            // Redirect or reload after success
                            setTimeout(function() {
                                window.location.href = '{{ route('purchase.index') }}'; // Replace with your list route
                            }, 1500);
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.message :
                            "An unexpected error occurred.";

                        Toastify({
                            text: errorMessage,
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }
                });
            });
        });
    </script>
@endsection
