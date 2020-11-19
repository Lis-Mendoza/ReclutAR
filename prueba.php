
<?php
include ("session.php");

if ( !isset( $_GET[ 'menu' ] ) ) {
	$menu = "bienvenida.php";
} else {
	$menu = $_GET[ 'menu' ];
	$menu = $menu . ".php";


}


?>

<!doctype html>
<html class="no-js" lang="zxx">

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
                <div class="sidebar-header col-md-12">
                   <a href="#"><img src="logo_chiquito.jpg" class="img-circle" alt="User Image" class="img-circle"/>
                    </a>
					<h3>Lis</h3>
					<p>Cosmeticos</p>
					<strong>CL</strong>
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
								<a href="../Pantallas/profile.html" class="dropdown-item">Bases y Condiciones </a>

							</div>
						</li>


						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Soporte Técnico</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
							<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
								<a href="../Pantallas/profile.html" class="dropdown-item">Teléfono: 11-5702-0698</a>
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
                            <div class="col-lg-1 col-sm-6 col-xs-12 col-md-8 col-md-offset-0">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="ReclutarMovil.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div>
								<div class="header-top-menu tabl-d-n">
									<ul class="nav navbar-nav mai-top-nav">
										<li class="nav-item"><a href="index.php?menu=bienvenida" class="nav-link">Inicio ReclutAR</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Quiénes Somos  <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Alumna:Lis Mendoza</a>
												<a href="#" class="dropdown-item">Profesores: <br>Cesar Conejeros <br>Fernando La Rosa</a>
												<a href="#" class="dropdown-item">Institución:I.F.T.S. 11</a>
												<a href="#" class="dropdown-item">Materia:<br>Desarrollo Web <br>PP III</a>
												<a href="#" class="dropdown-item">Año:2020</a>

											</div>
										</li>


										<li class="nav-item dropdown">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Contáctanos <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
											<div role="menu" class="dropdown-menu animated flipInX">
												<a href="#" class="dropdown-item">Teléfono: <br>11-5702-0698</a>
												<a href="#" class="dropdown-item">e-mail: reclut_ar@gmail.com</a>

											</div>
										</li>


										
										<li class="nav-item"><a href="index.php?menu=login" class="nav-link">Ingresar</a>
										</li>
										<li class="nav-item"><a href="index.php?menu=registro-perfil" class="nav-link">Registrarse</a>
										</li>

									</ul>
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
									<li><a data-toggle="collapse" data-target="#Charts" href="index.php?menu=login">Iniciar sesión<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>

									</li>
									<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="index.php?menu=registro-perfil">Registrarse <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Miscellaneousmob" class="collapse dropdown-header-top">

										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#others" href="#">¿Quienes somos?<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="others" class="collapse dropdown-header-top">
											<li><a href="#">Alumna: Lis Mendoza</a>
											</li>
											<li><a href="#">Profesores:<br> Cesar Conejeros <br>Fernando La Rosa</a>
											</li>
											<li><a href="#">Institución: I.F.T.S. 11</a>
											</li>
											<li><a href="#">Materia:<br>Desarrollo Web <br>PP III<br> </a>
											</li>
											<li><a href="#">Año: 2020</a>
											</li>
										</ul>
									</li>

									<li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Contáctate con un Ascesor <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
										<ul id="Tablesmob" class="collapse dropdown-header-top">
											<li><a href="#">Teléfono:11-5702-0698</a>
											</li>
											<li><a href="#">e-mail: reclut_ar@gmail.com</a>
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
            <!-- Breadcome End-->
            <!-- accordion start-->
			<div class="breadcome-list map-mg-t-40-gl shadow-reset col-md-12 ">
                                
        <?php
		include( $menu );
  
		?>
				   </div>
            <!-- accordion End-->
        </div>
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
    <!-- sticky JS
         ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- mCustomScrollbar JS
         ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- scrollUp JS
         ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- main JS
         ============================================ -->
    <script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>