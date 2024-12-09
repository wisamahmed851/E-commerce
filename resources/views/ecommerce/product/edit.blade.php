@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Edit Product</h5>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Discard</button>
                            <button class="btn btn-primary" type="submit" form="editProducts" role="button">Save
                                Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Product Information</h6>
                </div>
                <div class="card-body">
                    <form method="POST" id="editProducts" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $product->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $product->price }}" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="discounted_price" class="form-label">Discounted Price</label>
                            <input type="number" class="form-control" id="discounted_price" name="discounted_price"
                                value="{{ $product->discounted_price }}" step="0.01"
                                placeholder="Enter discounted price (if any)">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <!-- QuillJS Editor -->
                            <div id="editor-container" style="height: 200px; border: 1px solid #ced4da;">
                                {!! $product->description !!}
                            </div>
                            <!-- Hidden input to store the Quill content -->
                            <textarea name="description" id="description" class="d-none"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product_status" class="form-label">Product Status</label>
                            <select class="form-select" id="product_status" name="product_status" required>
                                <option value="active" {{ $product->product_status === 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="inactive" {{ $product->product_status === 'inactive' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id === $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- HTML Form -->
                        <div class="mb-3">
                            <label for="images" class="form-label">Product Images</label>
                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*"
                                multiple>

                            <!-- Existing Images Preview -->
                            <div id="existingImagePreview" class="mt-3 d-flex flex-wrap gap-2">
                                @foreach ($productImages as $image)
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}"
                                            class="border rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                        <button type="button"
                                            class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-existing-image"
                                            data-image-id="{{ $image->id }}"
                                            style="transform: translate(50%, -50%);">&times;</button>
                                    </div>
                                @endforeach
                            </div>

                            <!-- New Images Preview -->
                            <div id="newImagePreview" class="mt-3 d-flex flex-wrap gap-2"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Script for handling new images display and removal -->
    <script>
        document.getElementById('images').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('newImagePreview');
            const inputFile = event.target;
            // Clear previous previews to avoid duplication
            previewContainer.innerHTML = '';

            // Use a new DataTransfer object to manage the file input
            const dataTransfer = new DataTransfer();

            // Get the selected files
            const files = Array.from(inputFile.files);

            files.forEach((file, index) => {
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const imageContainer = document.createElement('div');
                        imageContainer.className = 'position-relative';
                        imageContainer.dataset.index = index; // Assign an index for easier reference

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = file.name;
                        img.className = 'border rounded';
                        img.style.width = '100px';
                        img.style.height = '100px';
                        img.style.objectFit = 'cover';

                        const closeBtn = document.createElement('button');
                        closeBtn.innerHTML = '&times;';
                        closeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                        closeBtn.style.transform = 'translate(50%, -50%)';

                        // Handle removing the image
                        closeBtn.addEventListener('click', function() {
                            // Remove the image preview container
                            imageContainer.remove();

                            // Remove the file from the DataTransfer object
                            const updatedFiles = Array.from(dataTransfer.files).filter(
                                (_, i) => i !== index
                            );
                            updateFileInput(updatedFiles, inputFile, dataTransfer);
                        });

                        imageContainer.appendChild(img);
                        imageContainer.appendChild(closeBtn);
                        previewContainer.appendChild(imageContainer);
                    };

                    // Read the image data only once
                    reader.readAsDataURL(file);

                    // Add the file to the DataTransfer object
                    dataTransfer.items.add(file);
                }
            });

            // Update the input field with the DataTransfer files
            inputFile.files = dataTransfer.files;

            // Debugging: Log updated files
            console.log('Selected files:', Array.from(inputFile.files));
        });

        function updateFileInput(files, inputFile, dataTransfer) {
            // Clear DataTransfer and add updated files
            dataTransfer.items.clear();
            files.forEach((file) => dataTransfer.items.add(file));

            // Update the file input field
            inputFile.files = dataTransfer.files;

            // Debugging: Log updated files
            console.log('Updated files after removal:', Array.from(inputFile.files));
        }
    </script>
    {{-- Rich Text Editor Initialization --}}
    <script>
        var quill = new Quill('#editor-container', {
            theme: 'snow' // Use the Snow theme
        });

        // Set initial Quill content
        quill.root.innerHTML = {!! json_encode($product->description) !!};

        // Synchronize QuillJS content with the hidden textarea before form submission
        document.getElementById('editProducts').onsubmit = function() {
            document.getElementById('description').value = quill.root.innerHTML;
        };
    </script>

    {{-- script for handling the AJAX and image removal functionality --}}
    <script>
        $(document).ready(function() {
            let removedImages = []; // Track removed images
            let isSubmitting = false; // Prevent duplicate submissions

            // Handle removing existing images
            $('.remove-existing-image').on('click', function() {
                const imageId = $(this).data('image-id'); // Get image ID from the button
                removedImages.push(imageId); // Add to removed images array

                // Remove the image visually
                $(this).closest('.position-relative').remove();
            });

            // Handle form submission
            $('#editProducts').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                if (isSubmitting) {
                    return; // Prevent duplicate submission
                }
                isSubmitting = true;

                let $submitButton = $(this).find('button[type="submit"]');
                $submitButton.prop('disabled', true); // Disable button to prevent multiple clicks

                // Prepare FormData
                const formData = new FormData(this);
                if (removedImages.length > 0) {
                    formData.append('removed_images', JSON.stringify(
                        removedImages)); // Append removed images
                }

                // Send AJAX request
                $.ajax({
                    url: '{{ route('products.update', $product->id) }}',
                    method: 'POST', // Use POST to mimic PUT with _method override
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        isSubmitting = false;
                        $submitButton.prop('disabled', false); // Re-enable button

                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 5000,
                            }).showToast();
                            setTimeout(function() {
                                window.location.href =
                                    '{{ route('products.index') }}'; // Redirect after success
                            }, 2000);
                        } else if (response.status === 'warning') {
                            Toastify({
                                text: response.message.join(
                                    ', '), // Handle array messages
                                backgroundColor: "yellow",
                                duration: 5000,
                            }).showToast();
                        }
                    },
                    error: function(xhr) {
                        isSubmitting = false;
                        $submitButton.prop('disabled', false); // Re-enable button
                        console.error('Error:', xhr.responseText);
                    },
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
