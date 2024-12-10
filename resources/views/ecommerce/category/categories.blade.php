@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="container">
                <h1>Category Management</h1>
                <div class="row">
                    <!-- Category List -->
                    <div class="col-md-6 order-md-1">
                        <div class="list-card">
                            <h2>Category List</h2>
                            <ul id="categoryList">
                                @foreach ($categories as $category)
                                    <li>
                                        <strong>{{ $category->name }}</strong>
                                        @if ($category->children->isNotEmpty())
                                            <ul>
                                                @foreach ($category->children as $child)
                                                    @include('ecommerce.category.partials.subcategory', [
                                                        'subcategory' => $child,
                                                    ])
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Add Category Form -->
                    <div class="col-md-5 order-md-2">
                        <div class="form-card">
                            <h2>Add Category</h2>
                            <form method="POST" id="addCategory" action="{{ route('category.store') }}">
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
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#addCategory').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            // Display success message
                            Toastify({
                                text: "Category added successfully!",
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            setTimeout(function() {
                                window.location.href =
                                    '{{ route('category.index') }}'; // Replace with your list route
                            }, 1500);
                            // Update the category list dynamically
                            $('#categoryList').append(`
                            <li>
                                <strong>${response.category.name}</strong>
                            </li>
                        `);

                            // Reset the form
                            $('#addCategory')[0].reset();
                        } else if (response.status === 'error') {
                            // Show error messages
                            Toastify({
                                text: response.message || "An error occurred.",
                                backgroundColor: "red",
                                duration: 5000
                            }).showToast();
                        }
                    },
                    error: function(xhr) {
                        // Handle validation errors
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessages = '';

                            for (var field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    errorMessages += errors[field][0] + '\n';
                                }
                            }

                            Toastify({
                                text: errorMessages.trim(),
                                backgroundColor: "red",
                                duration: 5000
                            }).showToast();
                        }
                    }
                });
            });
        });
    </script>

    <style>
        .container {
            padding: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-card,
        .list-card {
            background-color: #1f2a64;
            padding: 20px;
            border-radius: 8px;
            color: white;
            flex: 1;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #2d3b80;
            color: white;
        }

        .btn-submit {
            background-color: #ff4f81;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #ff3365;
        }

        #categoryList {
            list-style: none;
            padding: 0;
        }

        #categoryList li {
            margin-bottom: 10px;
        }
    </style>
@endsection
