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

		<!-- Head Libs -->
		<script src="/octopus/assets/vendor/modernizr/modernizr.js"></script>
</head>
<body>
    <section class="body">
		<!-- start: header -->
			<?php include 'includes_header.php'; ?> 
		<!-- end: header -->
      <div class="inner-wrapper">
        <?php include 'includes_bar_lat.php';?>
        <section role="main" class="content-body">
          <div class="row">
            <div class="col-md-6"></div>
            <section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Mis cursos</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table mb-none">
												<thead>
													<tr>
														<th>#</th>
														<th>Nombre del curso</th>
														<th>Horas del curso</th>
														<th>Descripción del curso</th>
														<th>editar/borrar</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Mark</td>
														<td>Otto</td>
														<td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, inventore? Minus consequatur voluptatum quasi similique eos nulla sequi, mollitia facilis ullam voluptatibus aut illo obcaecati provident adipisci fuga reiciendis dicta.</td>
														<td class="actions-hover">
															<a href=""><i class="fa fa-pencil"></i></a>
															<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium cupiditate, cum quasi temporibus earum asperiores aliquid placeat reiciendis ipsa quia quis voluptatibus? Adipisci, magnam minus eligendi quas obcaecati provident recusandae!</td>
														<td class="actions-hover">
															<a href=""><i class="fa fa-pencil"></i></a>
															<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Larry</td>
														<td>the Bird</td>
														<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi aliquid sapiente, et beatae est voluptates perspiciatis autem quisquam repellat iste provident itaque ut suscipit sit, architecto voluptas minima neque perferendis!</td>
														<td class="actions-hover">
															<a href=""><i class="fa fa-pencil"></i></a>
															<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
						<button type="submit" class="btn btn-primary">Crear nuevo curso</button>
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
</body>
</html>