<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Laravel App</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('second/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- Toastify CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<!-- Toastify JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- loader-->
    <link href="{{ asset('second/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('second/assets/js/pace.min.js') }}"></script>
    <!--plugins-->
    <link href="{{ asset('second/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('second/assets/plugins/metismenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('second/assets/plugins/metismenu/mm-vertical.css') }}" rel="stylesheet">
    <!--bootstrap css-->
    <link href="{{ asset('second/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('second/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/responsive.css') }}" rel="stylesheet">
</head>

<body class="bg-register">

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-lg-5 mx-auto">
                <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-5">
                        <img src="{{ asset('second/assets/images/logo1.png') }}" class="mb-4" width="145" alt="Logo">
                        <h4 class="fw-bold">Register</h4>
                        <p>Fill out the details to create your account.</p>

                        <!-- Updated Laravel Form -->
                        <form id="registerForm" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="card-name">Name</label>
                                <input type="text" class="form-control" name="name" id="card-name" autocomplete="on" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="card-email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="card-email" autocomplete="on" />
                            </div>
                            <div class="row gx-2">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="card-password">Password</label>
                                    <input type="password" class="form-control" name="password" id="card-password" />
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="card-confirm-password">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="card-confirm-password" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="card-role">Role</label>
                                <select class="form-control" name="role" id="card-role">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="card-register-checkbox" />
                                <label class="form-check-label" for="card-register-checkbox">
                                    I accept the <a href="#!">terms</a> and <a href="#!">privacy policy</a>.
                                </label>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary w-100" type="submit">Register</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins -->
    <script src="{{ asset('second/assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    url: '{{ route('auth.register.store') }}',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Toastify({
                                text: "Registration successful!",
                                backgroundColor: "green",
                                duration: 3000
                            }).showToast();
                            window.location.href = "/auth/login";
                        } else if (response.status === 'error') {
                            let errors = response.message;
                            let errorMessages = '';
                            for (let field in errors) {
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
                    },
                });
            });
        });
    </script>
</body>

</html>
