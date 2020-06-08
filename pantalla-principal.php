
<?php
	
	
	if(!isset($_GET['menu'])){
		$menu="bienvenida.php";
	}else{
    $menu=$_GET['menu'];
    $menu= $menu.".php";
 
  
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
	<link rel="shortcut icon" type="image/x-icon" href="../Pantallas/img/favicon.ico">
	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/bootstrap.min.css">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/font-awesome.min.css">
	<!-- adminpro icon CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/adminpro-custon-icon.css">
	<!-- meanmenu icon CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/meanmenu.min.css">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/jquery.mCustomScrollbar.min.css">
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/normalize.css">
	<!-- form CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/form.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="../Pantallas/css/responsive.css">
	<!-- modernizr JS
		============================================ -->
	<script src="../Pantallas/js/vendor/modernizr-2.8.3.min.js"></script>
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
					<a href="#"><img src="../Pantallas/cosmeticos.jpg" class="img-circle" alt="User Image"/>
                    </a>
					<h3>Lis</h3>
					<p>Cosmeticos</p>
					<strong>CL</strong>
				</div>
				<div class="left-custom-menu-adp-wrap">
					<ul class="nav navbar-nav left-sidebar-menu-pro">
						<li class="nav-item">
							<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Mi Negocio</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="pantalla-principal.php?menu=actualizar-perfil-negocio" class="dropdown-item">Actualizar Negocio</a>

							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Mis Pedidos</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Filtar Pedidos </a>

							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Seguimiento de Ordenes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Filtar Ordenes Recibidas</a>
							</div>
						</li>

						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Mis Productos</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Stock</a>
								<a href="" class="pantalla-principal.php?menu=incorporar">Dar de Alta</a>
								<a href="../Pantallas/contact-client-v.1.html" class="dropdown-item">Dar de Baja</a>
								<a href="../Pantallas/project-list.html" class="dropdown-item">Modificar</a>
								<a href="pantalla-principal.php?menu=listar-productos" class="dropdown-item">Listar</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Mis Revendedores</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="pantalla-principal.php?menu=incorporar" class="dropdown-item">Dar de Alta</a>
								<a href="../Pantallas/contact-client.html" class="dropdown-item">Dar de Baja</a>
								<a href="../Pantallas/contact-client-v.1.html" class="dropdown-item">Modificar</a>
								<a href="../Pantallas/project-list.html" class="dropdown-item">Listar</a>
								<a href="../Pantallas/project-details.html" class="dropdown-item">Bonos</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Mi Catalogo</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Campaña 1</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Tu Perfil</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="pantalla-principal.php?menu=actualizar-perfil" class="dropdown-item">Actualizar Perfil</a>
							</div>
						</li>
						<li class="nav-item"><a href="index.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Cerrar Sesion</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="index.php?menu=bienvenida" class="dropdown-item">Salir</a>

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
									<a href="#"><img src="../Pantallas/ReclutarMovil.jpg" alt="" />
                                    </a>
								</div>
							</div>
							<div class="col-lg-11 col-md-1 col-sm-1 col-xs-12">
								<div class="header-top-menu tabl-d-n">
									<ul class="nav navbar-nav mai-top-nav">
										<li class="nav-item"><a href="pantalla-principal.php?menu=bienvenida" class="nav-link">Inicio</a>
										</li>
										<li class="nav-item"><a href="pantalla-principal.php?menu=incorporar" class="nav-link">ReclutAR Incorporando</a>
										</li>


										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Contáctanos <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Telefono
												<div class="dropdown-item">11-5702-0698</div></a>
												<a href="#" class="dropdown-item">Mail
												<div class="dropdown-item">reclut_ar@gmail.com</div></a>

											</div>
										</li>
										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> ReclutAR &nbsp;&nbsp;¿Quienes Somos?&nbsp;&nbsp; <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Alumna:Lis Mendoza</a>
												<a href="#" class="dropdown-item">Profesor:Fernando La Rosa</a>
												<a href="#" class="dropdown-item">Institucion:I.F.T.S. 11</a>
												<a href="#" class="dropdown-item">Materia:Práctica Profesional III</a>
												<a href="#" class="dropdown-item">Año:2020</a>
											</div>
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
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Mi negocio <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="pantalla-principal.php?menu=actualizar-perfil-negocio">Actualizar Negocio</a>
											</li>
										</ul>
									</li>

									<li><a data-toggle="collapse" data-target="#others" href="#">Mis pedidos <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="others" class="collapse dropdown-header-top">
											<li><a href="../Pantallas/profile.html">Filtrar Pedidos</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Seguimiento de ordenes <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Miscellaneousmob" class="collapse dropdown-header-top">
											<li><a href="../Pantallas/google-map.html">Filtrar Ordenes Recibidas</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Mis productos <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Chartsmob" class="collapse dropdown-header-top">
											<li><a href="../Pantallas/bar-charts.html">Stock</a>
											</li>
											<li><a href="pantalla-principal.php?menu=incorporar">Dar de Alta</a>
											</li>
											<li><a href="../Pantallas/area-charts.html">Dar de Baja</a>
											</li>
											<li><a href="../Pantallas/rounded-chart.html">Modificar</a>
											</li>
											<li><a href="pantalla-principal.php?menu=listar-productos">Listar</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Mis Revendedores <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Tablesmob" class="collapse dropdown-header-top">
											<li><a href="pantalla-principal.php?menu=incorporar">Dar de Alta</a>
											</li>
											<li><a href="../Pantallas/data-table.html">Dar de Baja</a>
											</li>
											<li><a href="../Pantallas/rounded-chart.html">Modificar</a>
											</li>
											<li><a href="../Pantallas/c3.html">Listar</a>
											</li>
											<li><a href="../Pantallas/c3.html">Bonos</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#formsmob" href="#">Mi Catálogo <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="formsmob" class="collapse dropdown-header-top">
											<li><a href="catalogo-campaña-1.html">Campaña 1</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">Mi perfil<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Appviewsmob" class="collapse dropdown-header-top">
											<li><a href="pantalla-principal.php?menu=actualizar-perfil">Acualizar Perfil
												</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Pagemob" href="#">Cerrar Sesion <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Pagemob" class="collapse dropdown-header-top">
											<li><a href="index.php?menu=bienvenida">Salir</a>
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

		<!-- Breadcome End-->
		<!-- login Start-->

		<?php
		include( $menu );
  
		?>
		<!-- login End-->
	</div>

	<!-- Footer Start-->

	<!-- Footer End-->
	<!-- jquery
		============================================ -->
	<script src="../Pantallas/js/vendor/jquery-1.11.3.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="../Pantallas/js/bootstrap.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="../Pantallas/js/jquery.meanmenu.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="../Pantallas/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sticky JS
		============================================ -->
	<script src="../Pantallas/js/jquery.sticky.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="../Pantallas/js/jquery.scrollUp.min.js"></script>
	<!-- form validate JS
		============================================ -->
	<script src="../Pantallas/js/jquery.form.min.js"></script>
	<script src="../Pantallas/js/jquery.validate.min.js"></script>
	<script src="../Pantallas/js/form-active.js"></script>
	<!-- main JS
		============================================ -->
	<script src="../Pantallas/js/main.js"></script>
</body>

</html>