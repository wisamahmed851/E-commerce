@extends('ecommerce.layout.layouts2')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center gap-1">
                            <h4 class="card-title flex-grow-1">All Users List</h4>

                            <a href="" class="btn btn-sm btn-primary">
                                Add User
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="blogsTable" class="table table-striped">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th> <!-- Added Action column -->
                                            <th>Role Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated via AJAX -->
                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role == 1 ? 'Amdin' : 'User' }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span
                                                            class="badge bg-{{ $user->status == 'active' ? 'success' : 'warning' }}">
                                                            {{ ucfirst($user->status) }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Toggle status button -->
                                                    <form id="statusUpdate{{ $user->id }}" class="statusUpdateForm"
                                                        data-user-id="{{ $user->id }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-sm btn-{{ $user->status == 'active' ? 'danger' : 'success' }}">
                                                            {{ $user->status == 'active' ? 'Deactivate' : 'Activate' }}
                                                        </button>
                                                    </form>


                                                </td>
                                                <td>
                                                    <!-- Toggle Role button -->
                                                    <form id="roleUpdateForm{{ $user->id }}" class="roleUpdateForm"
                                                        data-user-id="{{ $user->id }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-sm btn-{{ $user->role == '1' ? 'danger' : 'success' }}">
                                                            {{ $user->role == '1' ? 'Demote' : 'Promote' }}
                                                        </button>
                                                    </form>


                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer border-top">
                            <div id="paginationControls" class="pagination-controls">
                                <!-- Custom pagination HTML will be injected here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            // Attach the event to all forms with the class 'statusUpdate'
            $('.statusUpdateForm').on('click', 'button', function(e) {
                e.preventDefault();

                var form = $(this).closest('form'); // Get the closest form element
                var userId = form.data('user-id'); // Get the user ID from the data attribute

                var url = "{{ route('user.toggleStatus', ':id') }}".replace(':id', userId);
                var formData = form.serialize(); // Serialize form data

                $.ajax({
                    url: url, // The dynamic URL based on the user ID
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // If status is successfully updated, show success message
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();

                            // Update button and status badge
                            var button = form.find('button');
                            var badge = form.closest('tr').find('.badge');
                            // Toggle button text and colors
                            if (response.data.newStatus === 'active') {
                                button.removeClass('btn-success').addClass('btn-danger').text(
                                    'Deactivate');
                                badge.removeClass('bg-warning').addClass('bg-success').text(
                                    'Active');
                            }
                            if (response.data.newStatus === 'inactive') {
                                button.removeClass('btn-danger').addClass('btn-success').text(
                                    'Activate');
                                badge.removeClass('bg-success').addClass('bg-warning').text(
                                    'Inactive');
                            }
                        }
                    },
                    error: function(xhr) {
                        // Handle errors
                        var errors = xhr.responseJSON
                            .errors; // Assuming errors are in 'errors' object
                        var errorMessages = '';
                        console.log("hello");

                        // Loop through errors and append them
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                errorMessages += errors[field][0] +
                                    '\n'; // Collect all error messages
                            }
                        }

                        // Show error messages in a Toastify popup
                        Toastify({
                            text: errorMessages.trim(),
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }
                });
            });
        });
        $(document).ready(function() {
            // Attach the event to all forms with the class 'statusUpdate'
            $('.roleUpdateForm').on('click', 'button', function(e) {
                e.preventDefault();

                var form = $(this).closest('form'); // Get the closest form element
                var userId = form.data('user-id'); // Get the user ID from the data attribute

                var url = "{{ route('user.togglerole', ':id') }}".replace(':id', userId);
                var formData = form.serialize(); // Serialize form data

                $.ajax({
                    url: url, // The dynamic URL based on the user ID
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // If status is successfully updated, show success message
                        if (response.status === 'success') {
                            Toastify({
                                text: response.message,
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();

                            // Update button and status badge
                            var button = form.find('button');
                            // Toggle button text and colors

                            if (response.data.newRole === '1') {
                                console.log("helawd");
                                button.removeClass('btn-success').addClass('btn-danger').text(
                                    'Demote');
                            }
                            if (response.data.newRole === '0') {
                                button.removeClass('btn-danger').addClass('btn-success').text(
                                    'Promote');
                            }
                            var roleColumn = form.closest('tr').find(
                            'td:nth-child(4)'); // 4th <td> for role
                            roleColumn.text(response.data.newRole === '1' ? 'Admin' : 'User');
                        }
                    },
                    error: function(xhr) {
                        // Handle errors
                        var errors = xhr.responseJSON
                            .errors; // Assuming errors are in 'errors' object
                        var errorMessages = '';
                        console.log("hello");

                        // Loop through errors and append them
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                errorMessages += errors[field][0] +
                                    '\n'; // Collect all error messages
                            }
                        }

                        // Show error messages in a Toastify popup
                        Toastify({
                            text: errorMessages.trim(),
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }
                });
            });
        });
    </script>
    <!-- End Container Fluid -->
@endsection
