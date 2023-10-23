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
        $session = $_SESSION['user_email'] ?? '';
        if ($session) {
            require_once "includes/after_signin_header.php";
        } else {
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
                        <li><a href="packages.html">Tour Packages</a></li>
                        <li><a href="hotels.html">Terms of Use</a></li>
                        <li><a href="hotels.html">Privacy Policy</a></li>
                        <li><a href="insurance.html">Contact Us</a></li>
                        <li><a href="about.html">About</a></li>
                        <?php

                        if ($session) { ?>
                            <li class="menu-has-children"><a href="#">Write us</a> </li>
                        <?php    } else { ?>
                            <li class="menu-has-children"><a href="enquiry.php">Enquiry </a> </li>
                        <?php    } ?>


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

    <!-- modal end here -->


    <!-- enquiry table  start-->


    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 ">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Enquiry Form Password</h6>
                    </div>
                    <div class="card-body">
                    <?php
                      
                    if (isset($_SESSION['enquiry_message'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>hello!</strong> <?= $_SESSION['enquiry_message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> <?php
                                unset($_SESSION['enquiry_message']);
                            }
                                ?>
                        <form action="functions/enqiry_datainsert.php" method="post">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter valid email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your
                                    email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="mobile_number">Mobile number</label>
                                <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="11 Digit mobile number">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" cols="10"></textarea>
                            </div>

                            <button type="submit" name="submit_quiry_btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- enquiry table end -->








    <?php require_once "includes/footer.php"; ?>

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

    <?php if ($_SESSION['user_profile_update_data']) { ?>
        <script>
            (function($) {
                $('#myprofile_user').modal('show');
                let userProfileUpdateDiv = document.getElementById("user_profile_update");
                userProfileUpdateDiv.innerHTML = "<?= $_SESSION['profile_data_update'] ?> ";
            })(jQuery);
        </script>
    <?php
        unset($_SESSION['user_profile_update_data']);
    }
    ?>
</body>

</html>