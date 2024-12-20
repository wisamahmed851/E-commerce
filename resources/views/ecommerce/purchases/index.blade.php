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
                                                        <a href="{{ route('purchase.edit', $purchase->id) }}"
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
                    </div>

                    <!-- Modal for Viewing Receipt -->
                    <div class="modal fade" id="receiptModal" tabindex="-1" aria-labelledby="receiptModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="receiptModalLabel">Purchase Receipt</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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
            if ($.fn.DataTable.isDataTable('#purchasesTable')) {
                $('#purchasesTable').DataTable().destroy();
            }

            $('#purchasesTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
            // Load receipt in modal
            $('.view-receipt').on('click', function(e) {
                e.preventDefault();

                const purchaseId = $(this).data('id');
                const receiptUrl = `/admin/purchase/${purchaseId}/receipt`; // Include 'admin'
                const downloadUrl = `/admin/purchase/${purchaseId}/download`;
                // Set download button link
                $('#downloadReceiptButton').attr('href', downloadUrl);

                // Load receipt content
                $.get(receiptUrl, function(data) {
                    $('#receiptContent').html(data);
                    $('#receiptModal').modal('show');
                });
            });
        });
    </script>
@endpush
