<?php


if ( !isset( $_GET[ 'menu' ] ) ) {
	$menu = "bienvenida.php";
} else {
	$menu = $_GET[ 'menu' ];
	$menu = $menu . ".php";


}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login | Adminpro - Admin Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- adminpro icon CSS
		============================================ -->
	<link rel="stylesheet" href="css/adminpro-custon-icon.css">
	<!-- meanmenu icon CSS
		============================================ -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- form CSS
		============================================ -->
	<link rel="stylesheet" href="css/form.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
	<style type="text/css">
		body,
		td,
		th {
			font-family: "Open Sans", sans-serif;
		}

	</style>
	<!-- modernizr JS
		============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Header top area start-->
	<div class="wrapper-pro">
		<div class="left-sidebar-pro">
			<nav id="sidebar">
				<div class="sidebar-header">
					<a href="#"><img src="logo_chiquito.jpg" class="img-circle" alt="User Image"/>
                    </a>
					<h3>ReclutAR</h3>
					<p>Gestion del personal de Reventa</p>
					<strong>AR</strong>
				</div>
				<div class="left-custom-menu-adp-wrap">
					<ul class="nav navbar-nav left-sidebar-menu-pro">
						<li class="nav-item">
							<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">ReclutAr</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="index.php?menu=bienvenida" class="dropdown-item">Inicio</a>

							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Recluta y Gana</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Incorporar</a>

							</div>
						</li>


						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Soporte Tecnico</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Telefono: 11-5702-0698</a>
								<a href="../Pantallas/contact-client.html" class="dropdown-item">e-mail: reclut_ar@gmail.com.ar</a>

							</div>
						</li>

					</ul>
				</div>
			</nav>
		</div>
		<!-- Header top area start-->
		<div class="content-inner-all">
			<div class="header-top-area">
				<div class="fixed-header-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
								<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
							

								<div class="admin-logo logo-wrap-pro">
									<a href="#"><img src="ReclutarMovil.jpg" alt="" />
                                    </a>
								</div>
							</div>
							<div class="col-lg-11 col-md-1 col-sm-1 col-xs-12">
								<div class="header-top-menu tabl-d-n">
									<ul class="nav navbar-nav mai-top-nav">
										<li class="nav-item"><a href="index.php?menu=bienvenida" class="nav-link">Inicio ReclutAR</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Quienes Somos  <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Alumna:Lis Mendoza</a>
												<a href="#" class="dropdown-item">Profesor:Fernando La Rosa</a>
												<a href="#" class="dropdown-item">Institucion:I.F.T.S. 11</a>
												<a href="#" class="dropdown-item">Materia:Práctica Profesional III</a>
												<a href="#" class="dropdown-item">Año:2020</a>

											</div>
										</li>


										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Contáctanos <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Telefono: <br>11-5702-0698</a>
												<a href="#" class="dropdown-item">e-mail: reclut_ar@gmail.com</a>

											</div>
										</li>


										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Nuestros Rubros <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Hogar</a>
												<a href="#" class="dropdown-item">Basar</a>
												<a href="#" class="dropdown-item">Ropa</a>
												<a href="#" class="dropdown-item">Calsados</a>

											</div>
										</li>
										<li class="nav-item"><a href="index.php?menu=login" class="nav-link">Ingresar</a>
										</li>
										<li class="nav-item"><a href="index.php?menu=registro-perfil" class="nav-link">Registrarse</a>
										</li>

									</ul>
								</div>
							</div>
							<div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
								<div id="Projects" class="tab-pane fade">
									<div class="projects-settings-wrap">
										<div class="note-heading-indicate">
											<h2><i class="fa fa-cube"></i> Latest projects</h2>
											<p> You have 20 projects. 5 not completed.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header top area end-->
		<!-- Breadcome start-->

		<!-- Breadcome End-->
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul class="mobile-menu-nav">
									<li><a data-toggle="collapse" data-target="#Charts" href="index.php?menu=login">ReclutAR Inicio secion<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>

									</li>
									<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="index.php?menu=registro-perfil">Registrarse <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Miscellaneousmob" class="collapse dropdown-header-top">

										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#others" href="#">Nuestra Empresa<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="others" class="collapse dropdown-header-top">
											<li><a href="#">Alumna: Lis Mendoza</a>
											</li>
											<li><a href="#">Pofesor: frnando La Rosa</a>
											</li>
											<li><a href="#">Institución: I.F.T.S. 11</a>
											</li>
											<li><a href="#">Materia: Practica Profesional III</a>
											</li>
											<li><a href="#">Año: 2020</a>
											</li>
										</ul>
									</li>

									<li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Contactate con un Ascesor <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Tablesmob" class="collapse dropdown-header-top">
											<li><a href="#">Telefono:11-5702-0698</a>
											</li>
											<li><a href="#">e-mail: reclut_ar@gmail.com</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#formsmob" href="#">Conoce Nuestros Rubros <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="formsmob" class="collapse dropdown-header-top">
											<li><a href="#">Hogar</a>
											</li>
											<li><a href="#">Ropa</a>
											</li>
											<li><a href="#">Calzados</a>
											</li>
											<li><a href="#">Basar</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu end -->
		<!-- Breadcome start-->
		<div class="breadcome-area mg-b-30 des-none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					</div>
				</div>
			</div>
		</div>
		<?php
		include( $menu );

		?>
		<!-- Breadcome End-->
		<!-- login Start-->

		<!-- login End-->
	</div>

	<!-- Footer Start-->

	<!-- Footer End-->
	<!-- jquery
		============================================ -->
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="js/bootstrap.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="js/jquery.meanmenu.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sticky JS
		============================================ -->
	<script src="js/jquery.sticky.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- form validate JS
		============================================ -->
	<script src="js/jquery.form.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/form-active.js"></script>
	<!-- main JS
		============================================ -->
	<script src="js/main.js"></script>
</body>

</html>