<?php session_start();
if($_SESSION['name']==null || $_SESSION['name']==''){
	header('Location: /');
}
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>User Profile | Okler Themes | Porto-Admin</title>
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
		<section class="body">

			<!-- start: header -->
			 <?php include 'includes_header.php'; ?> 
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				 <?php include 'includes_bar_lat.php' ?> 
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Perfil de usuario</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Páginas</span></li>
								<li><span>Perfil del usuario</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?=ucwords($_SESSION['name'])?></span>
											<span class="thumb-info-type"><?= ucwords($_SESSION['rol'])?></span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-md">
										<div class="widget-header">
											<h6>Completar perfil</h6>
											<div class="widget-toggle">+</div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													60%
												</div>
											</div>
										</div>
										<div class="widget-content-expanded">
											<ul class="simple-todo-list">
												<li class="completed">Actualizar foto de perfil</li>
												<li class="completed">Cambiar información personal</li>
												<li>Actualizar redes sociales</li>
												<li>Seguir a alguien</li>
											</ul>
										</div>
									</div>

									<hr class="dotted short">

									<h6 class="text-muted">Acerca de:</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
									<div class="clearfix">
										<a class="text-uppercase text-muted pull-right" href="#">(View All)</a>
									</div>

									<hr class="dotted short">

									<div class="social-icons-list">
										<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</div>

								</div>
							</section>
						</div>
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li>
										<a href="#edit" data-toggle="tab">Editar</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="edit" class="tab">

										<form class="form-horizontal" id="formUpdate" action="/octopus/principal/php/update.php" method="POST">
											<h4 class="mb-xlg">Información personal</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre</label>
													<div class="col-md-8">
														<input type="text" name="first_name" class="form-control" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Apellidos</label>
													<div class="col-md-8">
														<input type="text" name="last_name" class="form-control" id="profileLastName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileEmail">Actualizar email</label>
													<div class="col-md-8">
														<input type="email" name="email" class="form-control" id="email">
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Cambiar contraseña</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Nueva contraseña</label>
													<div class="col-md-8">
														<input type="text" name="pwd" class="form-control" id="profileNewPassword">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repite la contraseña</label>
													<div class="col-md-8">
														<input type="text" name="pwd_confirm" class="form-control" id="profileNewPasswordRepeat">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Actualizar</button>
														<button type="reset" class="btn btn-default">Cancelar</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-3">

							<h4 class="mb-md">Tu información</h4>
							<div class="alert alert-primary" role="alert">
								<p><strong>Nombre:</strong> <?=ucwords($_SESSION['name'])?></p>
								<p><strong>email:</strong> <?=$_SESSION['email']?></p>
							</div>
							
						</div>

					</div>
					<!-- end: page -->
				</section>
			</div>




			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="/octopus/assets/vendor/jquery/jquery.js"></script>
		<script src="/octopus/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/octopus/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/octopus/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/octopus/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/octopus/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/octopus/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="/octopus/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="/octopus/principal/js/validation_register.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="/octopus/assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/octopus/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/octopus/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/octopus/assets/javascripts/theme.init.js"></script>

		<!-- Custom JS -->

	</body>
</html>