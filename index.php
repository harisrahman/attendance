<?php

	session_start();

	if (array_key_exists("id", $_COOKIE)) {
		$_SESSION['id'] = $_COOKIE['id'];
	}

	if (array_key_exists("id", $_SESSION) || array_key_exists("id", $_COOKIE)){

		header("Location: HomePage");
	}

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Easy Attendance.com</title>

		<link href="commons/API/Bootstrap 4.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="commons/API/fontawesome/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
		<link href='commons/fonts/OpenSans Font.css' rel='stylesheet' type='text/css'>
		<link href='commons/fonts/Merriweather Font.css' rel='stylesheet' type='text/css'>
		<link href="commons/API/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="commons/LandingPageCSS.css" rel="stylesheet">

	</head>

	<body id="page-top">

		<!-- Navigation -->
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">Easy Attendance.com</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#signInUp">Sign In/Up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="StudentFinder">Student's</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="masthead text-center d-flex">
			<div class="container my-auto">
				<div class="row">
					<div class="col-md-12 mx-auto" id="headingDiv">
						<h1 class="textOverlay animate-reveal animate-first"">
							<strong>Attendance At Your Fingertips</strong>
						</h1>
					</div>
					<div class="col-lg-8 mx-auto">
						<center><p class="text-faded mb-5  textOverlay animate-reveal animate-second mainSubhead">Making attendance super easy and fun!</p></center>

					</div>
					<div class="col-lg-8 mx-auto bounce alignBottom">
						<a href="#about" class="js-scroll-trigger animate-reveal animate-third">
							<img width="80" height="80" alt="" src="commons/images/arrow.svg" />
						</a>
					</div>
				</div>

			</div>
		</header>

		<section class="bg-primary" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="sectionn-heading text-white">What you had always been waiting for!</h2>
						<hr class="light my-4">
						<p class="text-faded mb-4">Gone are the days of old, heavy and dusty attendance registers. Now you can take attendance of you class in a few clicks. Taking attendance has never been this easy!</p>
					</div>
				</div>
			</div>
		</section>



		<section class="p-0" id="about">
			<div class="container-fluid p-0">
				<div class="row no-gutters popup-gallery">
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/1.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/1.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/2.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/2.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/3.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/3.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/4.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/4.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/5.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/5.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="commons/images/portfolio/fullsize/6.jpg">
							<img class="img-fluid" src="commons/images/portfolio/thumbnails/6.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>


				<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">At Your Service</h2>
						<hr class="my-4">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-globe text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3">Easy Access</h3>
							<p class="text-muted mb-0">Take or view attendance from anywhere!</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-calculator text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3">Calculation</h3>
							<p class="text-muted mb-0">Automatic average, percentage calculation!</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-leaf text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3">Go Green</h3>
							<p class="text-muted mb-0">Reduce paperwork and save time and money!</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-calendar-alt fa_custom fa-4x text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3">Up to Date</h3>
							<p class="text-muted mb-0">Always updated database and results!</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-dark text-white" id="signInUp">
			<div class="container text-center">
				<h2 class="mb-4 quoteBillGates">
					<span class="bigQuotes">&#8220;</span> The advance of technology is based on making it fit in so that you don't really even notice it, so it's part of everyday life. <span class="bigQuotes">&#8221;</span>
					</h2>
					<span class="citation2"><center>Bill Gates</center></span><br>
				<a class="btn btn-light btn-xl sr-button" href="SignUp">Sign Up!</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				
				<a class="btn btn-primary btn-xl sr-button" href="SignIn">Sign In!</a>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading">Contact Us!</h2>
						<hr class="my-4">
						<p class="mb-5">In case of any concerns or queries, feel free to call or send us an email and we will get back to you as soon as possible!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 ml-auto text-center">
						<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
						<p>+91-9022-043010</p>
					</div>
					<div class="col-lg-4 mr-auto text-center">
						<i class="fas fa-envelope fa-3x mb-3 sr-contact"></i>
						<p>
							<a href="mailto:your-email@your-domain.com">easyattendance@yahoo.com</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<script src="commons/API/jquery-3.3.1.min.js"></script>
		<script src="commons/API/popper.min.js"></script>
		<script src="commons/API/Bootstrap 4.0/js/bootstrap.min.js"></script>
		<script src="commons/API/jquery-easing/jquery.easing.min.js"></script>
		<script src="commons/API/scrollreveal/scrollreveal.min.js"></script>
		<script src="commons/API/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="commons/LandingPageJS.js"></script>

	</body>

</html>
