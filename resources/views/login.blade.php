<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zoho CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/dist/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/themify-icons/themify-icons.css') }}">



</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-box-body">
            <h3 class="login-box-msg">Sign In</h3>
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <form action="" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control sty1" name="email" placeholder="User">
                    @error('email')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control sty1" name="password" placeholder="Password">
                    @error('password')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div>
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox">
                                Remember Me </label>
                            <a href="pages-recover-password.html" class="pull-right"><i class="fa fa-lock"></i> Forgot
                                pwd?</a>
                        </div>
                    </div>
                    <!-- submit button -->
                    <div class="col-xs-4 m-t-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit"
                            value="submit">Sign In</button>
                    </div>
                    <!-- submit button -->
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                    Sign in using
                    Facebook</a> <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i
                        class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <div class="m-t-2">Don't have an account? <a href="pages-register.html" class="text-center">Sign Up</a>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/dist/js/jquery.min.js') }}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{ asset('assets/dist/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/dist/js/niche.html') }}"></script>
</body>


</html>
