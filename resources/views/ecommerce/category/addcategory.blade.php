@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="form-card">
                <h2>Add Category</h2>
                <form method="POST" id="addCategory" action="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" name="name" placeholder="Enter category name" required />
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Parent Category:</label>
                        <select name="parent_id">
                            <option value="">None</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn-submit">Add Category</button>
                </form>
            </div>
        </div>
    </main>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #131c4e;
            /* Matches the dashboard theme */
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .main-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main-content {
            width: 100%;
            max-width: 400px;
        }

        .form-card {
            background-color: #1f2a64;
            border-radius: 8px;
            padding: 20px 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffde59;
            /* Accent color for headings */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #2d3b80;
            color: #fff;
            font-size: 14px;
        }

        .form-group input::placeholder {
            color: #a1a1a1;
        }

        .form-group select {
            appearance: none;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #ff4f81;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-submit:hover {
            background-color: #ff3365;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: 2px solid #ffde59;
        }
    </style>

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
