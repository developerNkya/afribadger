<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 22:30:58 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Nazox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="images/images2/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="css/css2/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="css/css2/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="css/css2/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body class="auth-body-bg">

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">


                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="index.html" class="">
                                                        <img src="images/images2/logo-dark.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                        <img src="images/images2/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                                    </a>
                                                </div>
    
                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Nazox.</p>
                                            </div>


                                            @if($errors->any())
                                            <div id="error-box">
                                                <div class="alert alert-danger">
                                                    <strong>Error:</strong>
                                                    <ul>
                                                        @foreach ($errors->get('loginError') as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                        
                                            <div class="p-2 mt-5">
                                                <form class="" method="post" action="{{url('/login')}}">
                    
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class=" ri-lock-2-line auti-custom-input-icon bi bi-person-circle"></i>
                                                        @csrf

                                                        <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                                    </div>
                                                    </div>
                            
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon bi bi-lock-fill"></i>
                                                        <div class="form-group">
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control"  name="password" id="userpassword" placeholder="Enter password">
                                                        </div>
                                                    </div>
                            

                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="js/js2/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 22:30:58 GMT -->
</html>
