@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Product List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
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
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->discounted_price }}</td>
                                        <!-- Accessing category via the 'category' relationship -->
                                        <td>{{ $product->category->name ?? 'No Category' }}</td>
                                        <td>
                                            @if ($product->images->count() > 0)
                                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                                                    alt="Product Image" style="width: 50px; height: 50px;">
                                            @else
                                                No Image
                                                @alert('hello');
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge ">
                                                {{ $product->status == 'active' ? 'In Active' : 'active' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                            class="dropdown-item">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item view-details"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fas fa-info-circle"></i> Details
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                // Options here if needed
            });
        });
    </script>
    <!-- Product Details Modal -->
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
            $('#example').on('click', '.view-details', function() {
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

                            // Show modal using Bootstrap 5 modal API
                            var myModal = new bootstrap.Modal(document.getElementById(
                                'productDetailsModal'), {
                                keyboard: false
                            });
                            myModal.show();
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


@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            // Initialize DataTable
            let table = $('#productTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('products.data') }}", // Define the route for fetching data
                    type: 'GET',
                    dataSrc: function(json) {
                        // This will process the response data and return the rows to the table
                        return json.map(function(product, index) {
                            return {
                                id: product.id,
                                name: product.name,
                                price: product.price,
                                discounted_price: product.discounted_price,
                                category_name: product.category ? product.category.name : 'N/A',
                                image: asset('storage/' + product.image),
                                status: product.status ?
                                    '<span class="badge bg-success">Active</span>' :
                                    '<span class="badge bg-danger">Inactive</span>',
                                actions: `<a href="{{ route('products.edit', '') }}/${product.id}" class="btn btn-sm btn-primary">Edit</a>
                                          <form action="{{ route('products.destroy', '') }}/${product.id}" method="POST" style="display:inline;">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                          </form>`
                            };
                        });
                    }
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'price'
                    },
                    {
                        data: 'discounted_price'
                    },
                    {
                        data: 'category_name'
                    },
                    {
                        data: 'image',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ],
                error: function(xhr, error, code) {
                    console.error(xhr.responseText);
                    alert("helol") // Log error details
                }
            });
        });
    </script> --}}
@endpush
