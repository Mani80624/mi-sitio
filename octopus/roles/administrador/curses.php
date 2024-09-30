<?php session_start();
if($_SESSION['name']==null || $_SESSION['name']==''){
	header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="/octopus/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/octopus/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/octopus/assets/stylesheets/theme-custom.css">

		<!-- Custom css -->
		<link rel="stylesheet" href="/octopus/roles/administrador/css/styles.css">

		<!-- Head Libs -->
		<script src="/octopus/assets/vendor/modernizr/modernizr.js"></script>
</head>
<body>
		<section class="body">
			<!-- start: header -->
				<?php include 'includes_header.php'; ?> 
			<!-- end: header -->
		<div class="inner-wrapper" id="body">
			<?php include 'includes_bar_lat.php';?>
			<section role="main" class="content-body">
			  <div class="row">
	
				  <!-- etiqueta de creación -->
				 <div id="success">
	
				 </div>
	
	
				<div class="col-md-6">
	
				</div>
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>
							
						<h2 class="panel-title">Mis cursos</h2>
					</header>
					<div class="panel-body">
						<div id="table_async" class="table-responsive">
	
						</div>
					</div>
				</div>
				

				<div class="row">
					<button class="btn btn-primary" id="button-register">Crear nuevo curso</button>
			  </div>
			  
			  <div class="row mt-4" id="register-course">
			  <div class="tabs">
						<div class="tab-content">
							<div class="tab">
								<form id="courses_form" class="form horizontal">
									<h4 class="mb-xlg">Nuevo curso</h4>
									<fieldset>
										<div class="form-group">
											<label class="col-md-3 control-label">Nombre del curso</label>
											<div class="col-md-8">
												<input type="text" name="name_course" id="name_course" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Horas del curso</label>
											<div class="col-md-8">
												<input type="number" name="hours" id="hours" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Descripción de curso (no más de 250 carácteres)</label>
											<div class="col-md-8">
												<input type="text" name="description" id="description" class="form-control">
											</div>
										</div>
									</fieldset>
									<div class="row">
										<div class="col-md-9 col-md-offset-3">
											<button type="submit" class="btn btn-primary" id="data_send">Crear</button>
											<button type="reset" class="btn btn-primary" id="cancelar-form">Cancelar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
	
			  </div>
			</section>
	
		</div> 
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

		<!-- Custom script -->
		<script src="/octopus/roles/administrador/js/get_courses.js"></script>
		 <script src="/octopus/roles/administrador/js/show_register_courses.js"></script>
</body>
</html>