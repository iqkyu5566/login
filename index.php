<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login SIMAWA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <!--===============================================================================================-->
</head>

<style>
    .backg {
        background-image: url('assets/img/back.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body>

    <div class="limiter">
        <div class="container-login100 backg">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <!-- <img src="assets/login/images/123.jpg" alt="IMG"> -->
                    <!-- <img src="assets/img/logo.svg" alt="navbar brand" > -->
                </div>

                <!-- <form class="login100-form validate-form"> -->



                <span class="login100-form-title">
                    SIMAWA
                    <p>Sistem Manajemen Aplikasi Mahasiswa</p>
                </span>
                <p class="login-box-msg text-danger text-center mb-2 "></p>


                <div class="wrap-input100 validate-input" data-validate="Valid User is required">
                    <input class="input100" type="text" id="username" name="username" placeholder="Username" required>
                    <span class="focus-input100" style="color:rgba(0,0,255,0.5);"></span>
                    <span class="symbol-input100" style="color:rgba(0,0,255,0.5);">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password" required>
                    <span class="focus-input100" style="color:rgba(0,0,255,0.5);"></span>
                    <span class="symbol-input100" style="color:rgba(0,0,255,0.5);">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" style="background-color:#152776;">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Lupa
                    </span>
                    <a class="txt2" href="#">
                        Password?
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>