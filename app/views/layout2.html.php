<html>

<head>
	<!-- META DATA -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->

	<link href="https://fonts.googleapis.com/css?family=Chau+Philomene+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<!-- TITLE OF SITE -->
	<title>F & G</title>

	<!-- favicon img -->
	<link rel="shortcut icon" type="image/icon" href="<?= ROOT_URL ?>public/logo/favicon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="public/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />


	<!--animate.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/animate.css" />

	<!--hover.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/hover-min.css">

	<!--datepicker.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/datepicker.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/owl.theme.default.min.css" />

	<!-- range css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/jquery-ui.min.css" />

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/bootstrap.min.css" />

	<!-- bootsnav -->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/bootsnav.css" />

	<!--style.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/style.css" />

	<!--responsive.css-->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/responsive.css" />

	<!-- Spacing bootstrap 4 -->
	<link rel="stylesheet" href="<?= ROOT_URL ?>public/css/spacing.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

	<!-- main-menu Start -->
	<header class="top-area">
		<div class="header-area-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html">
								F<span>&</span>G
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="smooth-menu"><a href="#home">Home</a></li>
									<li class="smooth-menu"><a href="#gallery">Habitaciones</a></li>
									<li class="smooth-menu"><a href="#pack">Paquetes </a></li>
									<li class="smooth-menu"><a href="#spo">Ofertas</a></li>
									<li class="smooth-menu"><a href="#blog">Blog</a></li>
									<li class="smooth-menu"><a href="#subs">Contacto</a></li>
									<li>
										<button class="book-btn">Reserva
										</button>
									</li>
									<?php if (isset($_SESSION['is_logged_in'])) { ?>
										<li>
											<a href="<?= ROOT_PATH . 'users/logout' ?>"><button class="btn btn-danger" type="submit">Logout</button></a>
										</li>
									<?php } ?>
									
									<!--/.project-btn-->
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->

	</header><!-- /.top-area-->
	<!-- main-menu End -->


	<!-- CONTENT -->

	<?= $content ?>



	<!-- footer-copyright start -->
	<footer class="footer-copyright">
		<div class="container">
			<div class="footer-content">
				<div class="row">

					<div class="col-sm-3">
						<div class="single-footer-item">
							<div class="footer-logo">
								<a href="index.html">
									F<span>&</span>G
								</a>
								<p>
									Hotels
								</p>
							</div>
						</div>
						<!--/.single-footer-item-->
					</div>
					<!--/.col-->

					<div class="col-sm-3">
						<div class="single-footer-item">
							<h2>link</h2>
							<div class="single-footer-txt">
								<p><a href="#">Home</a></p>
								<p><a href="#">Habitaciones</a></p>
								<p><a href="#">Paquetes</a></p>
								<p><a href="#">Ofertas</a></p>
								<p><a href="#">Blog</a></p>
								<p><a href="#">Contacto</a></p>
							</div>
							<!--/.single-footer-txt-->
						</div>
						<!--/.single-footer-item-->

					</div>
					<!--/.col-->

					<div class="col-sm-3">
						<div class="single-footer-item">
							<h2>Habitaciones</h2>
							<div class="single-footer-txt">
								<p><a href="#">Suite Principal</a></p>
								<p><a href="#">Triple</a></p>
								<p><a href="#">Individual </a></p>
								<p><a href="#">Doble Individual</a></p>
								<p><a href="#">Estándar Doble</a></p>
								<p><a href="#">Junior Suite</a></p>
							</div>
							<!--/.single-footer-txt-->
						</div>
						<!--/.single-footer-item-->
					</div>
					<!--/.col-->

					<div class="col-sm-3">
						<div class="single-footer-item text-center">
							<h2 class="text-left">Contacto</h2>
							<div class="single-footer-txt text-left">
								<p>+1 (300) 1234 6543</p>
								<p class="foot-email"><a href="#">info@fyg.com</a></p>
								<p>Calle Falsa 123</p>
								<p>Logroño, España</p>
							</div>
							<!--/.single-footer-txt-->
						</div>
						<!--/.single-footer-item-->
					</div>
					<!--/.col-->

				</div>
				<!--/.row-->

			</div>
			<!--/.footer-content-->
			<hr>
			<div class="foot-icons ">
				<ul class="footer-social-links list-inline list-unstyled">
					<li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fab fa-facebook"></i></a></li>
					<li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fab fa-instagram"></i></a></li>
				</ul>
				<p>&copy; 2019 <a href="https://www.themesine.com">ThemeSINE</a>. Todos los derechos reservados</p>

			</div>
			<!--/.foot-icons-->
			<div id="scroll-Top">
				<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
			</div>
			<!--/.scroll-Top-->
		</div><!-- /.container-->

	</footer><!-- /.footer-copyright-->
	<!-- footer-copyright end -->




	<script src="<?= ROOT_URL ?>public/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


	<!--bootstrap.min.js-->
	<script src="<?= ROOT_URL ?>public/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="<?= ROOT_URL ?>public/js/bootsnav.js"></script>

	<!-- jquery.filterizr.min.js -->
	<script src="<?= ROOT_URL ?>public/js/jquery.filterizr.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--jquery-ui.min.js-->
	<script src="<?= ROOT_URL ?>public/js/jquery-ui.min.js"></script>

	<!-- counter js -->
	<script src="<?= ROOT_URL ?>public/js/jquery.counterup.min.js"></script>
	<script src="<?= ROOT_URL ?>public/js/waypoints.min.js"></script>

	<!--owl.carousel.js-->
	<script src="<?= ROOT_URL ?>public/js/owl.carousel.min.js"></script>

	<!-- jquery.sticky.js -->
	<script src="<?= ROOT_URL ?>public/js/jquery.sticky.js"></script>

	<!--datepicker.js-->
	<script src="<?= ROOT_URL ?>public/js/datepicker.js"></script>

	<!--Custom JS-->
	<script src="<?= ROOT_URL ?>public/js/custom.js"></script>


</body>

</html>