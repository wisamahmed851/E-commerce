@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Product Information</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="" id="createProducts" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="discounted_price" class="form-label">Discounted Price</label>
                            <input type="number" class="form-control" id="discounted_price" name="discounted_price"
                                step="0.01" placeholder="Enter discounted price">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <!-- Add a div for the QuillJS editor -->
                            <div id="editor-container" style="height: 200px; border: 1px solid #ced4da;"></div>
                            <!-- Hidden input to store the Quill content -->
                            <textarea name="description" id="description" class="d-none"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product_status" class="form-label">Product Status</label>
                            <select class="form-select" id="product_status" name="product_status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="images" class="form-label">Product Images</label>
                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*"
                                multiple required>
                            <div id="imagePreview" class="mt-3 d-flex flex-wrap gap-2"></div>
                            <!-- Image preview container -->
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>


                </div>
            </div>
        </div>
    </main>

    {{-- For rich text Editor --}}
    <script>
        // Initialize QuillJS editor
        var quill = new Quill('#editor-container', {
            theme: 'snow' // Use the Snow theme
        });
        // Synchronize QuillJS content with the hidden textarea before form submission
        document.getElementById('createProducts').onsubmit = function() {
            document.getElementById('description').value = quill.root.innerHTML;
        };
    </script>
    {{-- // for image display --}}
    <script>
        document.getElementById('images').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('imagePreview');
            const inputFile = event.target;
            previewContainer.innerHTML = ''; // Clear previous previews

            // Get the selected files
            let files = Array.from(inputFile.files);

            // Create a new DataTransfer object to manage the file input
            const dataTransfer = new DataTransfer();

            files.forEach((file) => {
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const imageContainer = document.createElement('div');
                        imageContainer.className = 'position-relative';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = file.name;
                        img.style.width = '100px';
                        img.style.height = '100px';
                        img.style.objectFit = 'cover';
                        img.className = 'border rounded';

                        const closeBtn = document.createElement('button');
                        closeBtn.innerHTML = '&times;';
                        closeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                        closeBtn.style.transform = 'translate(50%, -50%)';

                        closeBtn.addEventListener('click', function() {
                            // Remove the image container
                            imageContainer.remove();

                            // Find and remove the file based on its name
                            files = files.filter((f) => f.name !== file.name);

                            // Update the input field with the updated file list
                            updateFileInput(files, inputFile);
                        });

                        imageContainer.appendChild(img);
                        imageContainer.appendChild(closeBtn);
                        previewContainer.appendChild(imageContainer);
                    };

                    reader.readAsDataURL(file);

                    // Add the file to the DataTransfer object
                    dataTransfer.items.add(file);
                }
            });

            // Update the input field with the initial file list
            updateFileInput(files, inputFile);
        });

        function updateFileInput(files, inputFile) {
            const dataTransfer = new DataTransfer();
            files.forEach((file) => dataTransfer.items.add(file));
            inputFile.files = dataTransfer.files;

            // Debugging: Log the updated file list to ensure synchronization
            console.log('Updated files:', Array.from(inputFile.files));
        }
    </script>
    {{-- // For ajax --}}
    <script>
        $(document).ready(function() {

            $('#createProducts').on('submit', function(e) {
                e.preventDefault();

                // Create a new FormData object to handle file uploads
                var formData = new FormData(this); // 'this' will reference the form element

                $.ajax({
                    url: '{{ route('products.store') }}', // Laravel route for storing products
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
                                    '{{ route('products.index') }}'; // Replace with your list route
                            }, 1500);
                        } else if (response.status === 'error') {
                            var errors = response
                                .message; // Assuming 'message' contains validation errors
                            var errorMessages = '';

                            for (var field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    errorMessages += errors[field][0] +
                                        '\n'; // Append each error
                                }
                            }

                            Toastify({
                                text: errorMessages,
                                backgroundColor: "red",
                                duration: 5000
                            }).showToast();
                        }
                    },
                    error: function(xhr) {
                        // Handle server errors
                        Toastify({
                            text: "An error occurred. Please try again.",
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }
                });
            });
        });
    </script>
@endsection

{{-- <!-- Subcategories (optional) -->
            <div class="col-12 mb-3">
                <label class="form-label" for="subcategory">Subcategory:</label>
                <select class="form-select" id="subcategory" name="subcategory_id">
                    <option value="">Select Subcategory (optional)</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div> --}}
