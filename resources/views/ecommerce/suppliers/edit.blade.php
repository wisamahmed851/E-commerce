@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Supplier</h4>
                </div>
                <div class="card-body">
                    <form id="editSupplier" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Supplier Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter supplier name"
                                value="{{ $supplier->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contact Person:</label>
                            <input type="text" name="contact_person" class="form-control"
                                placeholder="Enter contact person" value="{{ $supplier->contact_person }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address"
                                value="{{ $supplier->email }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number"
                                value="{{ $supplier->phone }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address:</label>
                            <textarea name="address" class="form-control" rows="3" placeholder="Enter address">{{ $supplier->address }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Update Supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--end main wrapper-->

    <script>
        $(document).ready(function() {
            $('#editSupplier').on('submit', function(e) {
                e.preventDefault();

                // Create a new FormData object
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('supplier.update', $supplier->id) }}', // Laravel route for updating suppliers
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
                            setTimeout(function() {
                                window.location.href = '{{ route('supplier.index') }}';
                            }, 1500);
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.message :
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
