	<?php
	require_once "includes/connec.php";
	// error_reporting(0);
	session_start();
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Tour</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<header id="header">
			<?php 
			 if($_SESSION['user_email']){
				 require_once "includes/after_signin_header.php";
			}else{
				 require_once "includes/before_signin_header.php";

			 }
			?>
			<div class=" main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="packages.html">Tour Packages</a></li>
							<li><a href="hotels.html">Terms of Use</a></li>
							<li><a href="insurance.html">Contact Us</a></li>
							<li class="menu-has-children"><a href="">Write us</a> </li>

						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-between">
					<div class="col-lg-6 col-md-6 banner-left">
						<h6 class="text-white">Away from monotonous life</h6>
						<h1 class="text-white">Magical Travel</h1>
						<p class="text-white">
							If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
						</p>
						<a href="#" class="primary-btn text-uppercase">Get Started</a>
					</div>

				</div>
			</div>
		</section>

		<!-- modal start here -->
		 <?php require_once "includes/modal.php" ?>
		 <?php require_once "includes/logout_modal.php" ?>

		<!-- modal end here -->
		
		<section class="destinations-area section-gap">
			<div class="container mt-4">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-40 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Popular Tour packages</h1>
							<p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.</p>
						</div>
					</div>
				</div>
				<div class="row">

				<?php 
				 $select_tourpackage_query = "SELECT * FROM `tourpackages` " ;
				 $select_tourpackage_query_run = mysqli_query($con, $select_tourpackage_query);
				 while($row = mysqli_fetch_assoc($select_tourpackage_query_run)){ ?>

					<div class="col-lg-4">
						<div class="single-destinations">
							<div class="thumb">
								<img src="admin/img/package_img/<?= $row['packkageimage'] ?>" alt="" height="200px" width="200px"> 
							</div>
							<div class="details">
								<h4><?= $row['packagename'] ?></h4>
								<p> <strong>
								<?= $row['packagedetails'] ?></strong>
								</p>
								<ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Package Type</span>
										<span><?= $row['packagetype'] ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Package Location</span>
										<span><?= $row['packagelocation'] ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Pack Feature</span>
										<span><?= $row['packagefeature'] ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Package Duration</span>
										<span><?= $row['packageduration'] ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Price per person</span>
										<span><b><?= $row['packageprice'] ?></b></span>
									</li>
									<li class="d-flex justify-content-center align-items-center">
										<a href="#" class="btn btn-primary ">Book Now</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					
					
				</div>
			</div>
		</section>
		<!-- End destinations Area -->

		

		<!-- Start testimonial Area -->
		<section class="testimonial-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Testimonial from our Clients</h1>
							<p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="active-testimonial">
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End testimonial Area -->

		<!-- Start home-about Area -->
		<section class="home-about-area">
			<div class="container-fluid">
				<div class="row align-items-center justify-content-end">
					<div class="col-lg-6 col-md-12 home-about-left">
						<h1>
							Did not find your Package? <br>
							Feel free to ask us. <br>
							We‘ll make it for you
						</h1>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
						</p>
						<a href="#" class="primary-btn text-uppercase">request custom price</a>
					</div>
					<div class="col-lg-6 col-md-12 home-about-right no-padding">
						<img class="img-fluid" src="img/about-img.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- End home-about Area -->


		<!-- Start blog Area -->

		<!-- End recent-blog Area -->

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">


				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-sm-12 footer-text m-0">
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved |Enjoy your Tour with us </p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>