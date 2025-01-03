@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mt-4">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 text-dark">Purchase List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="detailTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Final Price</th>
                                    <th>Quantity</th>
                                    <th>Total Cost</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    @foreach ($transaction->details as $detail)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $detail->product->name }}</td>
                                            <td>{{ number_format($detail->price, 2) }}</td>
                                            <td>{{ number_format($detail->discount, 2) }}</td>
                                            <td>{{ number_format($detail->price - $detail->discount, 2) }}</td>
                                            <td>{{ $detail->quantity }}</td>
                                            <td>{{ number_format(($detail->price - $detail->discount) * $detail->quantity, 2) }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a data-id="{{ $detail->id }}" class="dropdown-item edit-btn">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('pos.details.delete', $detail->id) }}"
                                                                class="dropdown-item">
                                                                <i class="fas fa-edit"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal for Editing Transaction Details -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editTransactionDetailForm" method="GET">
                                    @csrf
                                    @method('GET')

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Transaction Detail</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <input type="hidden" id="transactionDetailId">
                                        <input type="hidden" name="product_id" id="product_id">
                                        <div class="mb-3">
                                            <label for="product" class="form-label">Product Name</label>
                                            <input type="text" id="product" class="form-control" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" step="0.01" name="price" id="price"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input type="number" step="0.01" name="discount" id="discount"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="number" name="quantity" id="quantity" class="form-control"
                                                required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
@endsection
@push('scripts')
    <!-- Include DataTables script -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables for Supplier and Purchases tables
            if ($.fn.DataTable.isDataTable('#detailTable')) {
                $('#detailTable').DataTable().destroy();
            }

            $('#detailTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });

            // Open the modal and load transaction detail data
            $('.edit-btn').on('click', function() {
                const transactionDetailId = $(this).data('id');
                const fetchUrl = `/admin/pos/${transactionDetailId}/fetch`;
                const updateUrl = `/admin/pos/${transactionDetailId}`;

                $.get(fetchUrl, function(data) {
                    $('#transactionDetailId').val(data.id);
                    $('#product_id').val(data.product_id); // Set the hidden product_id field
                    $('#product').val(data.product.name);
                    $('#price').val(data.price);
                    $('#discount').val(data.discount);
                    $('#quantity').val(data.quantity);

                    // Update form action
                    $('#editTransactionDetailForm').attr('action', updateUrl);

                    // Show the modal
                    $('#editModal').modal('show');
                });
            });

            $(document).on('submit', '#editTransactionDetailForm', function(e) {
                e.preventDefault();

                const detailId = $('#transactionDetailId').val(); // Hidden input for detail ID
                const updateUrl =
                    `/admin/pos/${detailId}/update`; // Replace with your route

                const formData = {
                    _token: $('input[name="_token"]').val(), // Ensure CSRF token is being included
                    _method: 'PUT', // Explicitly specify PUT
                    product_id: $('#product_id').val(), // Make sure this ID exists in your form
                    quantity: $('#quantity').val(), // Ensure these IDs match your form
                    discount: $('#discount').val(),
                };
                $.ajax({
                    url: updateUrl,
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            setTimeout(() => window.location.href =
                                '{{ route('pos.detailsShow') }}', 1500);
                        } else {
                            Toastify({
                                text: response.message,
                                backgroundColor: "ref",
                                duration: 3000
                            }).showToast();
                        }
                    },
                    error: function(xhr) {
                        Toastify({
                                text: xhr.responseJSON.message,
                                backgroundColor: "ref",
                                duration: 3000
                            }).showToast();
                    },
                });
            });

        });
    </script>
@endpush
