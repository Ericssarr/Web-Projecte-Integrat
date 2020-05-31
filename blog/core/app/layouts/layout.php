<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<?= Html::link('res/bootstrap/css/bootstrap.css'); ?>
	<!-- <?= Html::script('res/js/jquery.min.js'); ?> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Blog - Noticies i esdeveniments</title>
	<!-- Bootstrap core CSS -->
	<link href="/web/jquery-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="/web/css/all.css" rel="stylesheet">
	<!-- Estils css -->
	<link href="/web/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Navegació -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/web/index.html">
				<img src="/web/images/logoa.jpg" width="60" height="60" alt="logo" />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/web/index.html">Inici</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/web/about.html">Qui som?</a>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							El per què de tot plegat
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<a class="dropdown-item" href="/web/lareforestacio.html">La Reforestació</a>
							<a class="dropdown-item" href="/web/elviverismeforestal.html">El Viverisme Forestal</a>
							<a class="dropdown-item" href="/web/elcanviclimatic.html">El Canvi Climàtic</a>
							<a class="dropdown-item" href="/web/lalzina.html">L'Alzina</a>
							<a class="dropdown-item" href="/web/petjadaecologica.html">La Petjada Ecològica A Catalunya</a>
						</div>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="/web/calendari.html">Calendari d'Esdeveniments</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/web/galeria.html">Galeria de fotos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/web/contacte.html">Contacta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Blog</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Títol complet -->
	<div class="full-title" style="background-image: url(/web/images/bosc.jpg);  background-repeat: no-repeat; background-size:cover;">
		<div class="container">
			<!-- Heading de la web/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Blog
				<small style="color: white">GR Les Alzines</small>
			</h1>
		</div>
	</div>
	<!-- Contingut de la pàgina -->
	<div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/web/index.html">Inici</a>
				</li>
				<li class="breadcrumb-item active">Blog</li>
			</ol>
		</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-12">


					<div class="panel panel-default">
						<div class="panel-heading">Blog</div>
						<div class="panel-body">
							


							<?php
							View::load("index");
							?>
							<!--footer comença aqui-->
							<footer class="footer">
								<div class="container bottom_border">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col">
											<h2 class="headin5_amrc col_white_amrc pt2">Contacte</h2>
											<!--heading footer-->
											<p class="mb10"><b>Grup de Reforestació Les Alzines</b></p>
											<p><i class="fa fa-location-arrow"></i> Can Dània
												<p>Camí d'Altafulla (costat Centre d'Equitació)</p>
												<p>Torredembarra</p>
												<p><i class="fa fa-phone"></i> 677 09 34 30</p>
												<p><i class="fa fa fa-envelope"></i> grlesalzines@gmail.com </p>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col">
											<h2 class="headin5_amrc col_white_amrc pt2">Segueix-nos</h2>
											<!--heading footer acaba aquí-->
											<ul class="footer_ul2_amrc">
												<li>
													<a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a>
													<p><a href="https://www.facebook.com/grlesalzines" target="_blank">Facebook</a></p>
												</li>
												<li>
													<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
													<a href="https://twitter.com/grlesalzines" target="_blank">Twitter</a></p>
												</li>
												<li>
													<a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
													<p><a href="https://www.instagram.com/grles_alzines/" target="_blank">Instagram</a></p>
												</li>
											</ul>

										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<h2 class="headin5_amrc col_white_amrc pt2">Enllaços rápids</h2>

											<ul class="footer_ul_amrc">
												<li><a href="/web/index.html">Inici </a></li>
												<li><a href="/web/quisom.html">Qui Som?</a></li>
												<li><a href="/web/lareforestacio.html">El Per Qué de Tot Plegat</a></li>
												<li><a href="/web/galeria.html">Galeria de Fotos</a></li>
												<li><a href="/web/contacte.html">Contacta</a></li>
												<li><a href="/web/blog/?view=blog">Blog</a></li>
											</ul>

										</div>
									</div>
									<div class="container">
										<div class="footer-logo">
											<a href="#"><img src="/web/images/logoa.jpg" height="120" width="120" alt="" /></a>
										</div>

										<p class="copyright text-center">All Rights Reserved. &copy; 2020 <a href="#">GR Les Alzines</a> Design By : Ericssarr</p>
										<ul class="social_footer_ul">
											<li><a href="https://www.facebook.com/grlesalzines" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="https://twitter.com/grlesalzines" target="_blank"><i class="fab fa-twitter"></i></a></li>
											<li><a href="https://www.instagram.com/grles_alzines/" target="_blank"><i class="fab fa-instagram"></i></a></li>
										</ul>

									</div>
							</footer>

							<!-- Bootstrap nucli i JavaScript -->
							<script src="/web/jquery-bootstrap/jquery/jquery.min.js"></script>
							<script src="/web/jquery-bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
<?= Html::script('res/bootstrap/js/bootstrap.min.js'); ?>
</body>

</html>