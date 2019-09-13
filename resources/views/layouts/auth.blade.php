
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="" />

    <meta name="keywords" content="" />

	<title>@yield('title') | {{ config('app.name') }}</title>

	<link href="favicon.ico" type="image/ico" rel="icon">



	<link rel="stylesheet" href="/chatt/css/bootstrap.min.css">

	<link rel="stylesheet" href="/chatt/css/perfect-scrollbar.min.css" >

	<link rel="stylesheet" href="/chatt/css/themify-icons.css">

	<link rel="stylesheet" href="/chatt/css/emoji.css">

	<link rel="stylesheet" href="/chatt/css/style.css" >

	<link rel="stylesheet" href="/chatt/css/responsive.css" >

    @yield('styles')



</head>

	<body class="start" id="content">

		@yield('content')

        <script src="/site/js/jquery.js"></script>
		<!-- <script src="/chatt/js/jquery3.3.1.js"></script> -->

		<script src="/chatt/js/jquery-slim.min.js"></script>

		<script src="/chatt/js/popper.min.js"></script>

		<script src="/chatt/js/bootstrap.min.js"></script>

		<script src="/chatt/js/perfect-scrollbar.min.js"></script>

		<script src="/chatt/js/script.js"></script>



	</body>

    @yield('scripts')

</html>
