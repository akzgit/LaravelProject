<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0">
                        <div class="row g-0 align-items-center">
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-5">
                                            <h5 class="fs-3xl">Welcome Back</h5>
                                            <p class="text-muted">Sign in to continue.</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form action="{{ route('signin.process') }}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="Email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <div class="position-relative ">
                                                        <input type="email" class="form-control  password-input" id="email" placeholder="Enter email" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset.html" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" name="password" class="form-control pe-5 password-input " placeholder="Enter password" id="password-input" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                @if(session('accountNotApproved'))
                                                <div class="alert alert-danger">{{ session('accountNotApproved') }}</div>
                                                @endif

                                                @if (session('invalidCredentials'))
                                                <div class="alert alert-danger">
                                                {{ session('invalidCredentials') }}
                                                </div>
                                                @endif

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit" >Sign In</button>
                                                </div>


                                            </form>

                                            <div class="text-center mt-5">
                                                <p class="mb-0">Dont have an account? <a href="{{ route('signup') }}" class="fw-semibold text-secondary text-decoration-underline">SignUp</a></p>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    {{--  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- swiper.init js -->
    <script src="{{ asset('assets/js/pages/swiper.init.js') }}"></script>  --}}
</body>

</html>
