@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 text-dark">Supplier List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Supplier Table -->
                        @if ($suppliers->isEmpty())
                            <p>No suppliers found.</p>
                        @else
                            <table id="suppliersTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->contact_person ?? 'N/A' }}</td>
                                            <td>{{ $supplier->email ?? 'N/A' }}</td>
                                            <td>{{ $supplier->phone }}</td>
                                            <td>{{ $supplier->address ?? 'N/A' }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" class="dropdown-item view-details"
                                                                data-id="{{ $supplier->id }}">
                                                                <i class="fas fa-eye"></i> View Details
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('supplier.edit', $supplier->id) }}"
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

    <!-- Modal for Viewing Supplier Details -->
    <div class="modal fade" id="supplierDetailsModal" tabindex="-1" aria-labelledby="supplierDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supplierDetailsModalLabel">Supplier Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Supplier details content will be dynamically loaded here -->
                    <div id="supplierDetailsContent"></div>
                </div>
                <div class="modal-footer">
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
                if ($.fn.DataTable.isDataTable('#suppliersTable')) {
                    $('#suppliersTable').DataTable().destroy();
                }

                $('#suppliersTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true
                });

                // Handle view details button click
                $('#suppliersTable').on('click', '.view-details', function(e) {
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
                                var myModal = new bootstrap.Modal(document.getElementById('supplierDetailsModal'));
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
