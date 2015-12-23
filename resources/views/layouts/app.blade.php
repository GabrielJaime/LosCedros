<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{ $page_title or "LosCedros WEB" }}</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->
	<link rel="apple-touch-icon" href="/storage/favicon.png">


	{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}

	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

	<!-- DataTables -->
	{!! Html::style('assets/DataTables/datatables.min.css') !!}

	<!-- Theme style -->
	{!! Html::style('assets/dist/css/AdminLTE.min.css') !!}

	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	{!! Html::style('assets/dist/css/skins/skin-green.min.css') !!}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="skin-green">
<div class="wrapper">
	@if (Auth::check())
		{{--*/ $usuario = Auth::user() /*--}}
		<!-- Header -->
		@include('layouts.header')

		<!-- Sidebar -->
		@include('layouts.sidebar')
	@endif


	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				@yield('page_title')
				<small>@yield('page_description')</small>
			</h1>

		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Your Page Content Here -->
			@yield('content')

		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

	<!-- Footer -->
	@include('layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
{!! Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.5 JS -->
{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}


<!-- SlimScroll -->
{!! Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('assets/plugins/fastclick/fastclick.js') !!}

<!-- AdminLTE App -->
{!! Html::script('assets/dist/js/app.min.js') !!}
@yield('script')
</body>
</html>