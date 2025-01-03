@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Product Information</h6>
                </div>
                <div class="card-body">
                    <form id="createPurchase" method="POST">
                        @csrf
                        <!-- Product Selector -->
                        <div class="mb-3">
                            <label class="form-label">Products:</label>
                            <div id="productSelection">
                                <div class="product-row mb-3">
                                    <select class="form-select product-select" name="products[0][product_id]" required>
                                        <option value="" disabled selected>Select a product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                data-image="{{ $product->first_image_url }}">
                                                {{ $product->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div class="selected-image-container mt-2">
                                        <img src="" class="selected-product-image"
                                            style="display: none; max-width: 100px;" alt="Product Image">
                                    </div>

                                    <input type="number" class="form-control quantity-input mt-2"
                                        name="products[0][quantity]" placeholder="Enter quantity" required>
                                    <input type="number" class="form-control discount-input mt-2"
                                        name="products[0][discount]" placeholder="Enter discount (optional)">

                                    <button type="button" class="btn btn-danger remove-product mt-2">Remove</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mt-3" id="addProduct">Add Another Product</button>
                        </div>
                        <div class="mb-3">
                            <label for="payment_method">Payment Method:</label>
                            <select name="payment_method" id="payment_method" required>
                                <option value="cash">Cash</option>
                                <option value="card">Card</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Add Purchase</button>
                    </form>


                </div>
            </div>
        </div>
    </main>
    <style>
        .product-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .product-select {
            flex: 2;
        }

        .quantity-input,
        .price-input,
        .discount-input {
            flex: 1;
        }

        .selected-image-container {
            flex: 0;
            margin-top: 10px;
        }

        .selected-product-image {
            display: block;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .remove-product {
            align-self: center;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let productIndex = 1; // Index for dynamically added products

            // Add another product row
            document.getElementById('addProduct').addEventListener('click', function() {
                const productSelection = document.getElementById('productSelection');

                const productRow = document.createElement('div');
                productRow.classList.add('product-row', 'mb-3');
                productRow.innerHTML = `
                    <select class="form-select product-select" name="products[${productIndex}][product_id]" required>
                        <option value="" disabled selected>Select a product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-image="{{ $product->first_image_url }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="selected-image-container mt-2">
                        <img src="" class="selected-product-image" style="display: none; max-width: 100px;" alt="Product Image">
                    </div>
                    <input type="number" class="form-control quantity-input mt-2"
                           name="products[${productIndex}][quantity]" placeholder="Enter quantity" required>
                    <input type="number" class="form-control discount-input mt-2"
                           name="products[${productIndex}][discount]" placeholder="Enter discount (optional)">
                    <button type="button" class="btn btn-danger remove-product mt-2">Remove</button>
                `;

                productSelection.appendChild(productRow);
                productIndex++;
            });

            // Remove a product row
            document.getElementById('productSelection').addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-product')) {
                    e.target.closest('.product-row').remove();
                }
            });

            // Show product image on selection
            document.getElementById('productSelection').addEventListener('change', function(e) {
                if (e.target.classList.contains('product-select')) {
                    const selectedOption = e.target.selectedOptions[0];
                    const productImage = selectedOption.getAttribute('data-image');
                    const imageContainer = e.target.closest('.product-row').querySelector(
                        '.selected-product-image');

                    if (productImage) {
                        imageContainer.src = productImage;
                        imageContainer.style.display = 'block';
                    } else {
                        imageContainer.style.display = 'none';
                    }
                }
            });

            // AJAX Form Submission
            $('#createPurchase').on('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                $.ajax({
                    url: '{{ route('pos.store') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            setTimeout(() => window.location.href =
                                '{{ route('pos.index') }}', 1500);
                        }
                    },
                    error: function(xhr) {
                        const errorMessage = xhr.responseJSON ? xhr.responseJSON.message :
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
