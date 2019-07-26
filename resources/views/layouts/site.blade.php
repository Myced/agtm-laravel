<!DOCTYPE html>
 <html>
     <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="AGTM Team" />
        <meta content="Online Trading Site, APEX GLOBAL TRADING AND MARKETTING" name="description" />
        <meta name="keywords" content="AGTM, APEX GLOBAL TRADING AND MARKETING, a-gtm.com, www.a-gtm.com" />

        <title>@yield('title') - AGTM</title>

         <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

         <link rel="stylesheet" href="/site/css/bootstrap.css">
         <link rel="stylesheet" href="/site/css/font-awesome.css">
         <link rel="stylesheet" href="/site/css/AdminLTE.css">
         <link rel="stylesheet" href="/site/css/glyphicons.css">

         <!-- menus style -->
         <link rel="stylesheet" href="/site/css/sm-core-css.css">
         <link rel="stylesheet" href="/site/css/sm-blue/sm-blue.css">

         <link rel="stylesheet" href="/site/css/style.css">
         <link rel="stylesheet" href="/site/css/toastr.min.css">

         @yield('styles')

         </head>
<body>

    @include('includes.site.navigation')



   <div class="main">
       <div class="container-fluid">

                @yield('content')


                <!--//next row for the footer-->
                <!--//next row for the footer-->
            @include('includes.site.footer')
        </div>
    </div>



        <script type="text/javascript" src="/site/js/jquery.js"></script>
        <script type="text/javascript" src="/site/js/bootstrap.js"></script>
        <script type="text/javascript" src="/site/js/toastr.min.js"></script>
        <script type="text/javascript" src="/site/js/jquery.smartmenus.js"></script>
        @include('includes.site.notification')

        @yield('scripts')

        <script type="text/javascript" src="/site/js/app.js"></script>

     </body>
 </html>
