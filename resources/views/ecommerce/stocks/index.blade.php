@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mt-4">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 text-dark">Stock List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="stocksTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $stock->product->name ?? 'N/A' }}</td>
                                        <td>{{ $stock->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
            if ($.fn.DataTable.isDataTable('#purchasesTable')) {
                $('#purchasesTable').DataTable().destroy();
            }

            $('#stocksTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
@endpush
