<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bee Live</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="colorlib-logo"><a href="index.php">Bee Live</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="has-dropdown">
								<a href="work.php">Produit</a>
								<!--<ul class="dropdown">
									<li><a href="#">Commercial</a></li>
									<li><a href="#">Apartment</a></li>
								</ul> -->
							</li>
							<?php
								if (isset($_SESSION['userid']))
									{
							?>
							<li id="services"><a href="membre.php">Bienvenue <?php echo $_SESSION['userid'];?></a></li>
							<?php
									}
								else
									{
							?>

							<li><a href="connexion.php">Connectez vous</a></li>
							<?php
									}
							?>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="about.php">Notre équipe</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<?php
									if (isset($_SESSION['userid']))
										{
								?>
								<li id="services"><a href="deco.php">Déconnexion </a></li>
								<?php
										}
									else
										{
								?>

								<li><a href="inscription.php">Inscription</a></li>
								<?php
										}	
								?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url(images/img_alveoles.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
								<div class="slider-text-inner text-center">
									<h1>Contactez-nous</h1>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div id="colorlib-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h2>Nos Informations</h2>
					<div class="row contact-info-wrap">
						<div class="col-md-3">
							<p><span><i class="icon-location-2"></i></span> 30-32 Avenue de la Republique <br> 94800 Villejuif</p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 33 135 2355 98</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@beelive.com</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-globe"></i></span> <a href="#">beelive.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h2>Contactez-nous</h2>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Prenom</label>
								<input type="text" id="fname" class="form-control" placeholder="Pierre">
							</div>
							<div class="col-md-6">
								<label for="lname">Nom</label>
								<input type="text" id="lname" class="form-control" placeholder="Lefevre">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="xxx@gmail.com">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Sujet</label>
								<input type="text" id="subject" class="form-control" placeholder="Sujet de votre message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Votre Message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Envoyez" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="colorlib-subscribe">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
					<h2>Inscrivez-vous à notre Newsletter</h2>
					<div class="row">
						<div class="col-md-7">
							<p>Entrez votre adresse mail pour recevoir nos actualités et nos offres spéciales</p>
						</div>
						<div class="col-md-5">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Entrez votre Email">
											<button type="submit" class="btn btn-primary">S'ABONNER</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="colorlib-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<!--
                <div class="col-md-3 colorlib-widget">
                    <h4>A propos de nous</h4>
                    <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Recent Blog</h4>
                    <ul class="colorlib-footer-links">
                        <li>
                            <span>&mdash; 20 Jan, 2017</span>
                            <a href="#">Results of Annual General Meeting</a>
                        </li>
                        <li>
                            <span>&mdash; 19 Jan, 2017</span>
                            <a href="#">Construction was awarded with “The Best Construction Company” prize</a>
                        </li>
                        <li>
                            <span>&mdash; 18 Jan, 2017</span>
                            <a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
                        </li>
                    </ul>
                </div>
                -->
				<div class="col-md-3 col-md-push-1 colorlib-widget">
					<h4>Information</h4>
					<p>
					<ul class="colorlib-footer-links">
						<li><a href="about.html"><i class="icon-check"></i> Notre équipe</a></li>
						<li><a href="work.html"><i class="icon-check"></i> Notre service</a></li>
						<li><a href="blog.html"><i class="icon-check"></i> FAQ</a></li>
					</ul>
					</p>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Info</h4>
					<ul class="colorlib-footer-links">
						<li>30-32 Avenue de la République, <br> 94800, Villejuif</li>
						<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
						<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved.  <br>This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>
