@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mt-4">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 text-dark">Transaction List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="transactionTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Total Amount</th>
                                    <th>Payment Method</th>
                                    <th>Transaction Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->total_amount ?? 'N/A' }}</td>
                                        <td>{{ $transaction->payment_method ?? 'N/A' }}</td>
                                        <td>{{ $transaction->created_at ?? 'N/A' }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#" class="dropdown-item view-receipt"
                                                            data-id="{{ $transaction->id }}">
                                                            <i class="fas fa-file-alt"></i> View Receipt
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('purchase.edit', $transaction->id) }}"
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
            if ($.fn.DataTable.isDataTable('#transactionTable')) {
                $('#transactionTable').DataTable().destroy();
            }

            $('#transactionTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });

            // Load receipt in modal
            $('.view-receipt').on('click', function(e) {
                e.preventDefault();

                const transactionId = $(this).data('id');
                const receiptUrl = `/admin/pos/${transactionId}/receipt`; // Include 'admin'
                const downloadUrl = `/admin/pos/${transactionId}/download`;
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
