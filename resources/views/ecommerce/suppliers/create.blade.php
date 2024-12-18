@extends('ecommerce.layout.layouts2')

@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Supplier</h4>
                </div>
                <div class="card-body">
                    <form id="createSuppliers" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Supplier Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter supplier name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contact Person:</label>
                            <input type="text" name="contact_person" class="form-control"
                                placeholder="Enter contact person">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address:</label>
                            <textarea name="address" class="form-control" rows="3" placeholder="Enter address"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Add Supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--end main wrapper-->

    
    {{-- // For ajax --}}
    <script>
        $(document).ready(function() {

            $('#createSuppliers').on('submit', function(e) {
                e.preventDefault();

                // Create a new FormData object to handle file uploads
                var formData = new FormData(this); // 'this' will reference the form element

                $.ajax({
                    url: '{{ route('supplier.store') }}', // Laravel route for storing products
                    method: 'POST',
                    data: formData,
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting Content-Type header
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            setTimeout(function() {
                                window.location.href =
                                    '{{ route('supplier.index') }}'; // Replace with your list route
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
