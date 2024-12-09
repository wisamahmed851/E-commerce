<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>

    <!--favicon-->
    <link rel="icon" href="{{ asset('second/assets/images/favicon-32x32.png') }}" type="image/png">

    <!-- Loader -->
    <link href="{{ asset('second/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('second/assets/js/pace.min.js') }}"></script>

    <!-- Plugins -->
    <link href="{{ asset('second/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('second/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('second/assets/plugins/metismenu/mm-vertical.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('second/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('second/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('second/sass/responsive.css') }}" rel="stylesheet">

    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Toastify JS -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            document.querySelector('html').setAttribute('dir', 'rtl');
        }
    </script>
</head>

<body>
    <!-- Authentication -->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                        <div class="card-body p-5">
                            <img src="{{ asset('second/assets/images/logo1.png') }}" class="mb-4" width="145"
                                alt="">
                            <h4 class="fw-bold">Get Started Now</h4>
                            <p class="mb-0">Enter your credentials to login to your account</p>

                            <div class="form-body my-5">
                                <form id="loginForm" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="card-email">Email address</label>
                                        <input class="form-control" id="card-email" name="email" type="email"
                                            placeholder="jhon@example.com" />
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="card-password">Password</label>
                                        </div>
                                        <div class="input-group" id="show_hide_password">
                                            <input class="form-control" id="card-password" name="password"
                                                type="password" placeholder="Enter Password" />
                                            <a href="javascript:;" class="input-group-text bg-transparent">
                                                <i class="bi bi-eye-slash-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="card-checkbox"
                                                    checked="checked" />
                                                <label class="form-check-label mb-0" for="card-checkbox">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="auth-basic-forgot-password.html" class="fs-10">Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                            name="submit">Log in</button>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0">Don't have an account yet? <a
                                                href="auth-basic-register.html">Sign up here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('second/assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });

            // AJAX Form Submission
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('auth.login.store') }}',
                    method: 'POST',
                    data: formData,
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
                            window.location.href = "/admin";
                        } else {
                            Toastify({
                                text: response.message,
                                backgroundColor: "red",
                                duration: 3000
                            }).showToast();
                        }
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON;
                        var errorMessages = '';
                        for (var field in errors) {
                            errorMessages += errors[field][0] + '\n';
                        }
                        Toastify({
                            text: errorMessages,
                            backgroundColor: "red",
                            duration: 5000
                        }).showToast();
                    }
                });
            });
        });
    </script>
</body>

</html>
