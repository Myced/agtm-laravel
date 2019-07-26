<html>
    <head>
        <title> AGTM - SIGN UP </title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="AGTM Team" />
        <meta content="Online Trading Site, APEX GLOBAL TRADING AND MARKETTING" name="description" />
        <meta name="keywords" content="AGTM, APEX GLOBAL TRADING AND MARKETING, a-gtm.com, www.a-gtm.com" />


        <link rel="shortcut icon" href="/adminn/assets/images/favicon.ico">

        <link href="/site/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="/site/css/toastr.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="/site/css/font-awesome.css">
        <link href="/site/css/login.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">AGTM - Sign Up</h1>

                    <div class="account-wall">
                        <img class="profile-img" src="/site/images/photo.png?sz=120"
                             alt="">
                        <form class="form-signin" action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control" placeholder="Full Names" required autofocus
                                   value="{{ old('name') }}" name="name">
                            <br>

                            <input type="text" class="form-control" placeholder="Telephone" required
                                   value="{{ old('tel') }}" name="tel">
                            <br>

                            <input type="text" class="form-control" placeholder="Email" required
                                   value="{{ old('email') }}" name="email">

                            <hr>
                            <input type="text" class="form-control" placeholder="Username" required
                                   value="{{ old('username') }}" name="username">
                            <br>

                            <input type="password" class="form-control" placeholder="Password" required
                                   value="{{ old('password') }}" name="password">

                            <input type="password" class="form-control" placeholder="Repeat Password" required
                                   value="{{ old('password') }}" name="password_confirmation">

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">
                                Create Account
                            </button>

                            <br><br>
                            <a href="{{ route('home') }}" class="pull-left need-help"> <i class="fa fa-home"></i> Home </a>
                            <a href="{{ route('login') }}" class="pull-right need-help">Login </a><span class="clearfix"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>
    @include("includes.site.notification")
</html>
