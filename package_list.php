<?php
	session_start();
	require_once "includes/connec.php";
	// error_reporting(0);
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
		<title>Package list</title>

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
			$session = $_SESSION['user_email'] ?? '';
			if($session){
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
							<li><a href="index.php">Home</a></li>
							<li><a href="package_list.php">Tour Packages</a></li>
							<li><a href="user_pages.php?type=terms">Terms of Use</a></li>
							<li><a href="user_pages.php?type=privacy">Privacy Policy</a></li>
							<li><a href="user_pages.php?type=contact">Contact Us</a></li>
							<li><a href="user_pages.php?type=about">About</a></li>
							<?php 

							if($session){ ?>
								<li class="menu-has-children"><a href="#" data-toggle="modal" data-target="#user_writeus_modal">Write us</a> </li>
						<?php	}else{ ?>
							   <li class="menu-has-children"><a href="enquiry.php">Enquiry</a> </li>
						<?php	} ?>
							?>

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
		 
		 <?php require_once "includes/sign&register_modal.php" ?>
		 <?php require_once "includes/logout_modal.php" ?>
		 <?php require_once "includes/myprofile_modal.php" ?>
		 <?php require_once "includes/change_password_user_modal.php" ?>
		 <?php require_once "includes/user_write_modal.php" ?>

		<!-- modal end here -->
		
		<!-- tour package start here -->
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
										<a href="package_details.php?id=<?=$row['id']?>" class="btn btn-primary ">Book Now</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
		
					
				</div>
			</div>
		</section>
		<!--  tour package end here -->

		

	

	
	 
		<?php require_once "includes/footer.php";?>

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

      <?php if(isset($_SESSION['user_profile_update_data'])) {?>
       <script>

		 (function($){
						$('#myprofile_user').modal('show');
			let userProfileUpdateDiv = document.getElementById("user_profile_update");
			userProfileUpdateDiv.innerHTML = "<?= $_SESSION['profile_data_update'] ?> ";
			}
		)(jQuery);
		
	  </script>  
	  <?php 
	   unset ($_SESSION['user_profile_update_data']); }
	    ?>
	</body>

	</html>