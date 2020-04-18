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
	<link rel="stylesheet" href="fonts/flaticon/font/flat.css">

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
								<li id="active"><a href="membre.php">Bienvenue <?php echo $_SESSION['userid'];?></a></li>
								<?php
										}
									else
										{
								?>

								<li class="active"><a href="connexion.php">Connectez vous</a></li>
								<?php
										}
								?>
			
								<li><a href="blog.php">Blog</a></li>
								<li><a href="about.php">Notre équipe</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="deco.php">Deconnexion</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>bite</h2>
				   					<h1>BEE LIVE</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Surveillez vos ruches avec</h2>
									<h1>BEE LIVE</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
									<h2>Surveillez vos ruches avec</h2>
									<h1>BEE LIVE</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   		
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-4 animate-box colorlib-heading animate-box">
						<span class="sm">Bienvenue !</span>
						<h2><span class="thin">Notre motivation</span> <span class="thick">pour les abeilles</span></h2>
					</div>
					<div class="col-md-4 col-md-pull-4 animate-box">
						<div class="box text-center">
							<span class="num">30</span>
							<span class="yr">%</span>
							<!--<span class="thin">Experience</span>-->
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<p>En France, environ 30 % des colonies d’abeilles disparaissent chaque année. Cette disparition pourrait entraîner de lourdes conséquences sur notre écosystème. Changement climatique, exploitation excessive et la pollution participent à cette disparition.</p>
					</div>
				</div>
			</div>
		</div>

		
		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-project-management"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to= "1" data-speed="2000" data-refresh-interval="5"></span>
						<span class="colorlib-counter-label">Projet</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-education"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="8" data-speed="2000" data-refresh-interval="5"></span>
						<span class="colorlib-counter-label">Étudiants</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-bee-box"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="1" data-speed="2000" data-refresh-interval="5"></span>
						<span class="colorlib-counter-label">Produit</span>
					</div>
					<div class="col-md-3 text-center animate-box">
						<span class="icon"><i class="flaticon-population"></i></span>
						<span class="colorlib-counter js-counter" data-from="0" data-to="2" data-speed="2000" data-refresh-interval="5"></span>
						<span class="colorlib-counter-label">Partenaires</span>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Ce que nous proposons</span>
						<h2><span class="thin">Une ruche</span> <span class="thick">Connectée</span></h2>
						<p>Notre ruche connectée permet de surveiller à distance vos abeilles grâce à différents capteurs pour connaître en temps réel les conditions climatiques. </p>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="wrap">
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-thermometer"></i>
										</span>
										<div class="desc">
											<h3>Température</h3>
											<p>Un suivi en temps réel de la température dans la ruche</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-humidity"></i>
										</span>
										<div class="desc">
											<h3>Humidité</h3>
											<p>Une Surveillance de l'humidité a l'intérieur de la ruche</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-population"></i>
										</span>
										<div class="desc">
											<h3>Population</h3>
											<p>Un recensement de la population d'abeille à l'aide de capteur</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-place"></i>
										</span>
										<div class="desc">
											<h3>Localisation</h3>
											<p>Un service anti-vol intégré</p>
											</div>
									</div>
								</div>
								<!--
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-sketch"></i>
										</span>
										<div class="desc">
											<h3>Pre-Construction Design</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="services">
										<span class="icon">
											<i class="flaticon-conveyor"></i>
										</span>
										<div class="desc">
											<h3>Construction Management</h3>
											<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
											</div>
									</div>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 animate-box colorlib-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Élèves</span> <span class="thick">Ingénieurs</span></h2>
						<p>Équipe de huit élèves ingénieurs en 4ème année à l'EFREI Paris, soucieux de l'environnement, nous avons décidés de venir en aide aux abeilles.</p>
					</div>
					<div class="col-md-8 col-md-pull-4">
						<div class="row">
							<div class="wrap-2">
								<div class="col-md-6 text-center animate-box">
									<!--<div class="staff" class="staff-img" style="background-image: url(images/person1.jpg);">
										<a href="#" class="desc">
											<h3>John Miller</h3>
											<span>Lead Engineer</span>
											<div class="parag">
												<p>Even the all-powerful Pointing has no control about the blind texts</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-6 text-center animate-box">
									<div class="staff" class="staff-img" style="background-image: url(images/person2.jpg);">
										<a href="#" class="desc">
											<h3>Brian Smith</h3>
											<span>Architect</span>
											<div class="parag">
												<p>Even the all-powerful Pointing has no control about the blind texts</p>
											</div> -->

										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Testimonial</span>
						<h2><span class="thin">What Our</span> <span class="thick">Client Says</span></h2>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row animate-box">
							<span class="icon"><i class="icon-quotes-left"></i></span>
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/person1.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Andrew Field</span>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/person2.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Mark Bubble</span>
												<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/person3.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Adam Smith</span>
												<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		-->
		<!--
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
						<h2>Sign up for a Newsletter</h2>
						<div class="row">
							<div class="col-md-7">
								<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
							</div>
							<div class="col-md-5">
								<form class="form-inline qbstp-header-subscribe">
									<div class="row">
										<div class="col-md-12 col-md-offset-0">
											<div class="form-group">
												<input type="text" class="form-control" id="email" placeholder="Enter your email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
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
		-->
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

