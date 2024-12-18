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
                        <table id="supplierTable" class="table table-striped table-bordered">
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
                                @foreach ($supplier as $sup)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sup->name }}</td>
                                        <td>{{ $sup->contact_person }}</td>
                                        <td>{{ $sup->email }}</td>
                                        <td>{{ $sup->phone }}</td>
                                        <td>{{ $sup->address }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>

                                                        <a href="#" class="dropdown-item view-details"
                                                            data-id="{{ $sup->id }}">
                                                            <i class="fas fa-info-circle"></i> Details
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
                </div>
            </div>
        </div>
    </main>

    <!-- Supplier Details Modal -->
    <div class="modal fade" id="supplierDetailsModal" tabindex="-1" aria-labelledby="supplierDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supplierDetailsModalLabel">Supplier Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="supplierDetailsContent">
                        <!-- Supplier details will be dynamically loaded here -->
                    </div>
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
