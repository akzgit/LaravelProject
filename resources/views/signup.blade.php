<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
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
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="fs-3xl">Create account</h5>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form class="needs-validation" novalidate action="{{ route('signupstore') }}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>
                                                 {{--  to display errors  --}}
                                                @if ($errors->any())
                                                <div class="alert alert-danger mt-4">
                                                    <ul class="mb-0">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif

                                                <div class="mb-3">
                                                    <label class="form-label">Select an option</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="role" id="employee" value="Employee" checked>
                                                        <label class="form-check-label" for="employee">
                                                            Employee
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="role" id="employer" value="Employer">
                                                        <label class="form-check-label" for="employer">
                                                            Employer
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control password-input pe-5" onpaste="return false" name="password" placeholder="Enter password" id="password-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirm Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control password-input pe-5" onpaste="return false" name="password_confirmation" placeholder="Confirm password" id="confirm-password-input" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon2"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please confirm password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-sm">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-xs mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-xs mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-xs mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-xs mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Already have an account? <a href="{{ route('signin') }}" class="fw-semibold text-primary text-decoration-underline"> Sign in</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/passowrd-create.init.js') }}"></script>
</body>
</html>
