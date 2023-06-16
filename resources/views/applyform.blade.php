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
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h3 class="fs-3xl" style="font-size: 2.25rem !important;">Apply Form</h3>
                                        </div>                                        
                                        <div class="p-2 mt-5">
                                            <form class="needs-validation" novalidate action="" method="POST">
                                                @csrf
                                            
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your name
                                                    </div>
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your email
                                                    </div>
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="dob" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob" name="dob">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label class="form-label">Gender</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                                        <label class="form-check-label" for="male">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                        <label class="form-check-label" for="female">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="resume" class="form-label">Resume</label>
                                                    <input type="file" class="form-control" id="resume" name="resume">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="experience" class="form-label">Work Experience</label>
                                                    <textarea class="form-control" id="experience" name="experience" rows="3"></textarea>
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="education" class="form-label">Education</label>
                                                    <input type="text" class="form-control" id="education" name="education" placeholder="Enter your education details">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="skills" class="form-label">Skills</label>
                                                    <textarea class="form-control" id="skills" name="skills" rows="3"></textarea>
                                                </div>
                                            
                                                <button class="btn btn-primary w-100" type="submit">Submit Application</button>
                                            </form>
                                            
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
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/pages/passowrd-create.init.js') }}"></script>
</body>
</html>
