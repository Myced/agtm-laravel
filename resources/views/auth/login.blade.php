@extends('layouts.auth')

@section('title')
     {{ _("Login") }}
@endsection

@section('style')
    <link href="/site/css/toastr.min.css" rel="stylesheet" >
@endsection

@section('content')
<main>

    <div class="layout">

        <!-- Start of Sign In -->

        <div class="sign-bg">

            <div class="start">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-md-6">

                            <div class="register-content">

                                <div class="login-header">

                                    <div class="logo">

                                        <img src="/chatt/img/logo2.png" alt="">

                                    </div>

                                    <h1><i class="ti-key"></i>Sign in</h1>

                                </div>

                                <form class="login-up" method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">

                                        <input type="email" class="form-control" placeholder="Email Address"
                                            name="email" required>

                                        <button class="btn icon" type="button"><i class="ti-email"></i></button>

                                    </div>

                                    <div class="form-group">

                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" required>

                                        <button class="btn icon" type="button"><i class="ti-lock"></i></button>

                                    </div>

                                    <button type="submit" class="btn button" >Sign In</button>

                                    <div class="callout">

                                        <span>Sign in with</span>

                                        <ul>

                                            <li><a href="#" title="" class="facebook"><i class="ti-facebook"></i></a></li>

                                            <li><a href="#" title="" class="twitter"><i class="ti-twitter"></i></a></li>

                                            <li><a href="#" title="" class="google"><i class="ti-google"></i></a></li>

                                        </ul>

                                        <span>Don't have account? <a href="{{ route('register') }}">Create Account</a></span>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="col-lg-8 col-md-6">

                            <div class="page-meta">

                                <h2>AGTM - Sign In to enjoy the services we offer</h2>

                                <span>login now and enjoy!</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End of Sign In -->

    </div>

</main>
@endsection

@section('scripts')
    <script src="/site/js/toastr.min.js"></script>
    @include("includes.site.notification")
@endsection
