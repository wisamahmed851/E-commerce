@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Supplier List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Supplier Table -->
                        @if ($purchases->isEmpty())
                            <p>No purchases found.</p>
                        @else
                            <table id="purchasesTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product ID</th>
                                        <th>Supplier ID</th>
                                        <th>Purchase Price</th>
                                        <th>Discount</th>
                                        <th>Final Price</th>
                                        <th>Quantity</th>
                                        <th>Total Cost</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $purchase->product_id }}</td>
                                            <td>{{ $purchase->supplier_id }}</td>
                                            <td>{{ $purchase->purchase_price }}</td>
                                            <td>{{ $purchase->discount }}</td>
                                            <td>{{ $purchase->final_price }}</td>
                                            <td>{{ $purchase->quantity }}</td>
                                            <td>{{ $purchase->total_cost }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" class="dropdown-item view-receipt"
                                                                data-id="{{ $purchase->id }}">
                                                                <i class="fas fa-file-alt"></i> View Receipt
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('purchases.edit', $purchase->id) }}"
                                                                class="dropdown-item">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal for Viewing Receipt -->
    <div class="modal fade" id="receiptModal" tabindex="-1" aria-labelledby="receiptModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="receiptModalLabel">Purchase Receipt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Receipt content will be dynamically loaded here -->
                    <div id="receiptContent"></div>
                </div>
                <div class="modal-footer">
                    <a href="#" id="downloadReceiptButton" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i> Download Receipt
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!-- jQuery and DataTables -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                // Initialize DataTable
                if ($.fn.DataTable.isDataTable('#supplierTable')) {
                    $('#supplierTable').DataTable().destroy();
                }

                $('#supplierTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true
                });

                $('#supplierTable').on('click', '.view-details', function(e) {
                    e.preventDefault();
                    const supplierId = $(this).data('id'); // Get supplier ID
                    const url = "{{ url('admin/supplier') }}/" + supplierId + "/details"; // Construct URL

                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(response) {
                            if (response.status === 'success') {
                                const supplier = response.supplier;

                                const modalContent = `
                    <p><strong>Name:</strong> ${supplier.name}</p>
                    <p><strong>Contact Person:</strong> ${supplier.contact_person ?? 'N/A'}</p>
                    <p><strong>Email:</strong> ${supplier.email ?? 'N/A'}</p>
                    <p><strong>Phone:</strong> ${supplier.phone}</p>
                    <p><strong>Address:</strong> ${supplier.address ?? 'N/A'}</p>
                     `;

                                $('#supplierDetailsContent').html(modalContent);

                                // Show the modal
                                var myModal = new bootstrap.Modal(document.getElementById(
                                    'supplierDetailsModal'));
                                myModal.show();
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function(xhr) {
                            alert('Error fetching supplier details. Please try again.');
                        }
                    });
                });



            });
        </script>
    @endpush

    <style>
        /* Table styles */
        .dataTables_filter {
            text-align: right;
            margin-bottom: 15px;
        }

        .dataTables_paginate .paginate_button {
            margin-right: 5px;
        }
    </style>
@endsection
