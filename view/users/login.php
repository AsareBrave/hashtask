<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hashtask</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Hashtask" />
    <meta content="Hashtask" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- App css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="../assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="auth-fluid-pages pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-left">
                        <a href="index-2.html">
                            <span><img src="../assets/images/logo-light.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                    <!-- form -->
                    <form action="#" class="login-form" action="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" type="email" id="email" required placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <a href="#" class="text-muted float-right"><small>Forgot your password?</small></a>
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required id="password" placeholder="Enter your password" minlength="6" data-parsley-minlength="6">
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login" id="login-btn"></i> Log In </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Don't have an account?
                            <a href="#" class="text-muted ml-1"><b>Sign Up</b></a>
                        </p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Hyper Admin User
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- App js -->
    <!-- <script src="../assets/js/app.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/parsley.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>