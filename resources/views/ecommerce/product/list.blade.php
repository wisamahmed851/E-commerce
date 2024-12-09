@extends('ecommerce.layout.layouts')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Product List</h6>
                    <div class="dataTables_filter"></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="productTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Discounted Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Product Details Modal -->
    <div class="modal fade" id="productDetailsModal" tabindex="-1" aria-labelledby="productDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="productDetailsContent">
                        <!-- Product details will be dynamically loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- For modal opening --}}
    <script>
        $(document).ready(function() {
            // Handle Details button click
            $('#productTable').on('click', '.view-details', function() {
                const productId = $(this).data('id');
                const url = "{{ route('products.show', ':id') }}".replace(':id', productId);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        if (response.status === 'success') {
                            const product = response.product;
                            const modalContent = `
                        <h3>${product.name}</h3>
                        <p><strong>Price:</strong> $${product.price}</p>
                        <p><strong>Discounted Price:</strong> $${product.discounted_price}</p>
                        <p><strong>Status:</strong> ${product.status}</p>
                        <p><strong>Description:</strong> ${product.description}</p>

                        <h4>Product Images:</h4>
                        <div class="row">
                            ${product.images.map(image => {
                                return `<div class="col-md-3">
                                                                <img src="{{ asset('storage') }}/${image.image_path}" class="img-fluid" alt="${product.name}">
                                                            </div>`;
                            }).join('')}
                        </div>
                    `;

                            $('#productDetailsContent').html(modalContent);
                            $('#productDetailsModal').modal('show');
                        } else {
                            Toastify({
                                text: 'Product not found',
                                backgroundColor: 'red',
                                duration: 3000,
                            }).showToast();
                        }
                    },
                    error: function() {
                        Toastify({
                            text: 'Error fetching product details',
                            backgroundColor: 'red',
                            duration: 3000,
                        }).showToast();
                    }
                });
            });
        });
    </script>

    <script>
        $(function() {
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            // Initialize DataTable
            console.log('DataTable script initialized');
            $('#productTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('products.data') }}", // Backend route for DataTables
                columns: [{
                        data: null, // DataTables will handle this automatically
                        name: 'DT_RowIndex',
                        orderable: false, // Prevent sorting
                        searchable: false, // Prevent searching
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Meta provides the row index (starting at 0)
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'discounted_price',
                        name: 'discounted_price'
                    },
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'images',
                        name: 'images',
                        render: function(data) {
                            return data;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            const checked = data === 'active' ? 'checked' : '';
                            return `
            <div class="form-check form-switch">
                <input class="form-check-input status-toggle" type="checkbox" data-id="${row.id}" ${checked}>
            </div>`;
                        }
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                    }
                ],
                drawCallback: function() {
                    $('.dropdown-toggle').dropdown();
                    // Attach event listeners to status toggle
                    $('.status-toggle').on('change', function() {
                        const productId = $(this).data('id');
                        const status = $(this).is(':checked') ? 'active' : 'inactive';
                        var url = "{{ route('products.toggleStatus', ':id') }}".replace(':id',
                            productId);
                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                status: status
                            },
                            success: function(response) {
                                Toastify({
                                    text: response.message,
                                    backgroundColor: "green",
                                    duration: 3000,
                                }).showToast();
                            },
                            error: function() {
                                Toastify({
                                    text: "Error updating status",
                                    backgroundColor: "red",
                                    duration: 3000,
                                }).showToast();
                            },
                        });
                    });
                },
            });
        });
    </script>

    <style>
        /* Ensures all product images are the same size while maintaining aspect ratio */
        #productDetailsContent img {
            width: 100%;
            /* This will make sure all images fill the container */
            height: 200px;
            /* Set the height of the images */
            object-fit: cover;
            /* Maintain aspect ratio, cropping if necessary */
            border-radius: 8px;
            /* Optional: Adds rounded corners to the images */
        }

        .dataTables_filter {
            text-align: right;
            margin-bottom: 15px;
        }

        .dataTables_paginate .paginate_button {
            margin-right: 5px;
        }
    </style>
@endsection
