<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pangan Ketapang</title>
    <link rel="stylesheet" type="text/css" href="frontend/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="frontend/login/css/iofrm-theme12.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login" class="active">Login</a><a href="register">Register</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail Address"
                                required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> 
                                <a href="forget12.html">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="frontend/login/js/jquery.min.js"></script>
    <script src="frontend/login/js/popper.min.js"></script>
    <script src="frontend/login/js/bootstrap.min.js"></script>
    <script src="frontend/login/js/main.js"></script>
    @include('sweetalert::alert')
</body>

</html>
