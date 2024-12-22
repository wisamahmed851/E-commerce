@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Purchase</h4>
                </div>
                <div class="card-body">
                    <form id="editPurchase" method="POST">
                        @csrf
                        @method('PUT') <!-- Add PUT method for updating -->
                        <div class="mb-3">
                            <label class="form-label">Product:</label>
                            <select name="product_id" class="form-select" required>
                                <option value="" disabled>Select a product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ $purchase->product_id == $product->id ? 'selected' : '' }}>
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Supplier:</label>
                            <select name="supplier_id" class="form-select" required>
                                <option value="" disabled>Select a supplier</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ $purchase->supplier_id == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Purchase Price:</label>
                            <input type="number" step="0.01" name="purchase_price" class="form-control" value="{{ $purchase->purchase_price }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Discount:</label>
                            <input type="number" step="0.01" name="discount" class="form-control" value="{{ $purchase->discount }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantity:</label>
                            <input type="number" name="quantity" class="form-control" value="{{ $purchase->quantity }}" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Update Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--end main wrapper-->

    {{-- For AJAX --}}
    <script>
        $(document).ready(function() {
            $('#editPurchase').on('submit', function(e) {
                e.preventDefault();

                // Create a new FormData object for the AJAX request
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('purchase.update', $purchase->id) }}', // Route for updating purchase
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
                                window.location.href = '{{ route('purchase.index') }}'; // Redirect to the purchase list
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
