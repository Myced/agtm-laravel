
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>AGTM - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Online Trading Site, APEX GLOBAL TRADING AND MARKETTING" name="description" />
        <meta content="AGTM Team" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- App css -->
        <link href="/adminn/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/adminn/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/adminn/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />

        <!-- jquery toast -->
        <link rel="stylesheet" href="/adminn/plugins/jquery-toastr/jquery.toast.min.css">

        <link href="/adminn/assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- <link href="/adminn/assets/css/AdminLTE.css" rel="stylesheet" type="text/css" /> -->

        <!--//custom style here-->
        @yield('styles')

    <script src="/adminn/assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">
<!-- ========== Left Sidebar Start ========== -->
            @include('includes.admin.navigation')
            <!-- Left Sidebar End -->

            <div class="content-page">

                <!-- Top Bar Start -->
                @include('includes.admin.topbar')
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->


                <footer class="footer text-right">
                    2019 © AGTM. - Powered By PEFSCOM
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
<!-- jQuery  -->
        <script src="/adminn/assets/js/jquery.min.js"></script>
        <script src="/adminn/assets/js/popper.min.js"></script>
        <script src="/adminn/assets/js/bootstrap.min.js"></script>
        <script src="/adminn/assets/js/metisMenu.min.js"></script>
        <script src="/adminn/assets/js/waves.js"></script>
        <script src="/adminn/assets/js/jquery.slimscroll.js"></script>


        <script src="/adminn/plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>

        @yield('scripts')

        <!-- App js -->
        <script src="/adminn/assets/js/jquery.core.js"></script>
        <script src="/adminn/assets/js/jquery.app.js"></script>

        @include('includes.admin.notification')




    </body>
</html>
