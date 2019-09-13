<html>
    <head>
        <title> AGTM - LOGIN </title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="AGTM Team" />
        <meta content="Online Trading Site, APEX GLOBAL TRADING AND MARKETTING" name="description" />
        <meta name="keywords" content="AGTM, APEX GLOBAL TRADING AND MARKETING, a-gtm.com, www.a-gtm.com" />


        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">
        <link href="/site/css/toastr.min.css" rel="stylesheet" >
        <link href="/site/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="/site/css/font-awesome.css">
        <link href="/site/css/login.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">AGTM - Sign In</h1>
                    <div class="account-wall">
                        <img class="profile-img" src="/site/images/photo.png"
                             alt="">
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="text" class="form-control" placeholder="Email" required autofocus
                                    name="email">
                            <br>
                            <input type="password" class="form-control" placeholder="Password" required
                                    name="password">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                                Sign in</button>

                            <br>
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="1" name="remember">
                                Remember me
                            </label>
                            <br>
                            <br>

                            <a href="{{ route('home') }}" class="pull-left need-help"> <i class="fa fa-home"></i> Home </a>
                            <a href="{{ route('register') }}" class="pull-right need-help">Register </a><span class="clearfix"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="/site/js/jquery.js"></script>
    <script src="/site/js/toastr.min.js"></script>
    @include("includes.site.notification")
</html>
