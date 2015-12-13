<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!-- /.Nombre de la pagina -->
{{$page_title="Loguin"}} @stop
		<!-- /.Descripcion de la pagina -->
{{$page_description="Ingrese sus datos para poder acceder a la aplicacion"}}@stop

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{ $page_title or "LosCedros WEB" }}</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->

	{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}

	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
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


				<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper"style="width:100%">
			<!-- Content Header (Page header) -->


			<!-- Main content -->
			<section class="content" style="width:100%" >

				<div class="box login-box " >
					<div class="box-header with-border">
						<h3 class="box-title">Loguearse para Iniciar Sesion</h3>
					</div><!-- /.box-header -->
					<div class="login-box-body">
						<!-- Display Validation Errors -->
						@include('common.errors')
						<!-- form start -->
						<form action="/auth/login" method="POST" class="form-horizontal">
							{{ csrf_field() }}

							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="usuario" placeholder="Usuario"  value="{{ old('usuario') }}">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
							<div class="row">
								<div class="col-xs-8">
									<div class="checkbox icheck">
										<label>
											<input type="checkbox"  name="remember" > Remember Me
										</label>
									</div>
								</div><!-- /.col -->
								<div class="col-xs-4">
									<button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
								</div><!-- /.col -->
							</div>
						</form>
						<a href="#">Olvide la contraseña?</a><br>
					</div><!-- /.login-box-body -->
				</div>


			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		<!-- Footer -->
		@include('layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
{!! Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.2 JS -->
{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
<!-- AdminLTE App -->
{!! Html::script('assets/dist/js/app.min.js') !!}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>
