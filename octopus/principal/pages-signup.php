<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/octopus/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="/octopus/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<form action="/octopus/principal/php/registro.php" method="POST" id="formulario">
							<div class="form-group mb-lg">
								<label>Nombre</label>
								<input name="name" type="text" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>Correo Electrónico</label>
								<input name="email" type="email" class="form-control input-lg" />
							</div>

							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Contraseña</label>
										<input name="pwd" id="pwd" type="password" class="form-control input-lg" />
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Confirmar contraseña</label>
										<input name="pwd_confirm" id="pwd_confirm" type="password" class="form-control input-lg" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">Estoy de acuerdo con <a href="#">los terminos de uso</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Crear cuenta</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Crear cuenta</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>o</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Conectar con <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Conectar con <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">¿Ya tienes una cuenta? <a href="/">Inicia sesión</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">ManuelDC</a>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="/octopus/assets/vendor/jquery/jquery.js"></script>
		<script src="/octopus/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/octopus/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/octopus/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/octopus/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/octopus/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/octopus/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="/octopus/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/octopus/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/octopus/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/octopus/assets/javascripts/theme.init.js"></script>

		<!-- Jquery -->
		 <script src="/octopus/principal/js/validation_register.js"></script>

	</body>
</html>