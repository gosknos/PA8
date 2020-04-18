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
								<li class ="active"><a href="about.php">Notre équipe</a></li>
								<li><a href="contact.php">Contact</a></li>
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
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Company Info</h2>
				   					<h1>About Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-about">
			<div class="container">
				.<div class="row row-pb-lg">
					<div class="col-md-6">
						<div class="about animate-box">
							<h2>Welcome to BeeLive</h2>
							<p>Alors qu’une des espèces les plus importantes de la planète disparait petit à petit dans le silence, un groupe de héros à relever le défi de sauver ce petit être si important. Leur projet : une ruche connectée permettant d’accompagner, de contrôler et de sauver les abeilles.
							Un objectif louable, novateur et écologique, la perspective de transformer une simple ruche d’apiculteur en un véritable bijou technologique. Leur équipe de futurs ingénieurs dans les métiers de la data et de la programmation vous accompagnent dans votre installation de ruches connectées, Pour un monde plus mielleux. Alors n’attendez plus, achetez bee live.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="images/Abeille_about.jpg" >
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Our</span> <span class="thick">Engineers</span></h2>
						<p>Apprenez en plus sur notre équipe</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/alexis.jpg);">
							<a href="#" class="desc">
								<h3>Alexis Ribat</h3>
								<span>Project Manager</span>
								<div class="parag">
									<p>Manage team</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/francis.jpg);">
							<a href="#" class="desc">
								<h3>Francis Tran</h3>
								<span>Ingénieur</span>
								<div class="parag">
									<p>Bdd specialist</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/Julien_bg.jpg);">
							<a href="#" class="desc">
								<h3>Julien Larivière</h3>
								<span>Responsable capteur</span>
								<div class="parag">
									<p>Miel pops c'est bzz bzz bzz, bzz bzz bzz, bzz bzz bzz</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/amel.jpg);">
							<a href="#" class="desc">
								<h3>Amel Benaza</h3>
								<span>Business Pro</span>
								<div class="parag">
									<p>Gére les cotés financiers du projet</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/momotropbo.jpg);">
							<a href="#" class="desc">
								<h3>Mohamed Sayed</h3>
								<span>Expert Bdd</span>
								<div class="parag">
									<p>Bdd specialist</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/alexseum.jpg);">
							<a href="#" class="desc">
								<h3>Alexandre ASSANTE DI CUPILLO</h3>
								<span>Ingénieur</span>
								<div class="parag">
									<p>Son front lui offre une protection suffisante contre les rageux</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/Charloutte.jpg);">
							<a href="#" class="desc">
								<h3>Charlotte GEX</h3>
								<span>Project Manager</span>
								<div class="parag">
									<p>Manage team</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/Ikbel.jpg);">
							<a href="#" class="desc">
								<h3>Ikbel KHELLADI</h3>
								<span>Ingénieur</span>
								<div class="parag">
									<p>Assistante web</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<h2><span class="thin">Qui sommes</span> <span class="thick">Nous ?</span></h2>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row animate-box">
							<span class="icon"><i class="icon-quotes-left"></i></span>
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/francis.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Francis Tran</span>
												<p>Ses compétences en Big Data lui permettent d'être réactif, et très professionel dans l'execution de son travail</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/Julien_bg.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Julien Larivière</span>
												<p>La légende dit qu'aucun programme ne lui résiste </p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/momotropbo.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Mohamed SAYED</span>
												<p> Saint des Saints</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/Charloutte.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Charlotte GEX</span>
												<p>Contrôle l'équipe par la peur </p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/Alexis.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Alexis RIBAT</span>
												<p>Gére les relations extérieur et la programmation arduino </p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/alexseum.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Alexandre ASSANTE DI CUPILLO</span>
												<p>De loin la meilleure chose qui soit arrivé à ce groupe </p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/Ikbel.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Ikbel KHELLADI</span>
												<p>S'est retrouvé dans le groupe par le plus grand des hasard </p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="images/amel.jpg" alt="user">
											</figure>
											<blockquote>
												<span>Amel Benaza</span>
												<p>Avec Amel, il est aisé de travailler, elle tient le groupe d'une main de fer et assure une cohésion exeptionnelle</p>
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

