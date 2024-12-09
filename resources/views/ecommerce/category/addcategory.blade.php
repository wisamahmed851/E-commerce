@extends('ecommerce.layout.layouts')

@section('content')
<form method="POST" id="addCategory" action="">
    @csrf
    <div>
        <label for="name">Category Name:</label>
        <input type="text" name="name" required />
    </div>
    <div>
        <label for="parent_id">Parent Category:</label>
        <select name="parent_id">
            <option value="">None</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Add Category</button>
</form>
<script>
    $(document).ready(function() {
        $('#addCategory').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: '{{ route('category.store') }}', // Laravel route for registration
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // If registration is successful, show a success message
                    if (response.status == 'success') {
                        Toastify({
                            text: "Registration successful!",
                            backgroundColor: "green",
                            duration: 3000
                        }).showToast();
                        window.location.href = "/admin/category/create";
                    } else if (response.status === 'error') {
                        // If validation fails, format and display the error messages
                        var errors = response
                        .message; // Assuming 'message' contains validation errors
                        var errorMessages = '';

                        // Loop through the error object to construct a single string
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                errorMessages += errors[field][0] +
                                '\n'; // Append the first error for each field
                            }
                        }

                        // Show all error messages in one Toastify popup
                        Toastify({
                            text: errorMessages.trim(),
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }

                    // Optionally, redirect or reset the form
                    // window.location.href = "/auth/login"; // if you want to redirect
                },

            });
        });
    });
</script>
@endsection
