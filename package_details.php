<?php
session_start();
require_once "includes/connec.php";
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
    <title>Package Details</title>

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

    <style>
    .package_image {
        max-width: 100%; 
        height: auto; 
        border: 2px solid #3498db; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        transition: all 0.3s ease;
        border-radius: 10px;
    }

    .package_image:hover {
        transform: scale(1.05);
        border-color: #2980b9; 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
    }

    .booking_card{
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

 
</style>
</head>



<body>
    <header id="header">
        <?php
        $user_email = $_SESSION['user_email'] ?? '';
        if ($user_email) {
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
                        <li><a href="package_list.php">Tour Packages</a></li>
                        <li><a href="user_pages.php?type=terms">Terms of Use</a></li>
                        <li><a href="user_pages.php?type=privacy">Privacy Policy</a></li>
                        <li><a href="user_pages.php?type=contact">Contact Us</a></li>
                        <li><a href="user_pages.php?type=about">About</a></li>
                        <?php

                        if ($user_email) { ?>
                            <li class="menu-has-children"><a href="#" data-toggle="modal" data-target="#user_writeus_modal">Write us</a> </li>
                        <?php    } else { ?>
                            <li class="menu-has-children"><a href="enquiry.php">Enquiry</a> </li>
                        <?php    } ?>
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
                        If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $.17 each.
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
                        <h1 class="mb-10">Tour package Details</h1>
                    </div>
                </div>
            </div>
            <?php
            // show data in package details
            $pkgid = $_GET['id'];
            $select_package_query = " SELECT * FROM `tourpackages` WHERE `id` ='$pkgid' ";
            $select_package_query_run = mysqli_query($con, $select_package_query);
            $row = mysqli_fetch_assoc($select_package_query_run);

            ?>
            <div class="card border-light mb-3">
                <div class="card-body">

                    <div class="row booking_card">
                        <div class="col-md-4">
                            <img src="admin/img/package_img/<?= $row['packkageimage'] ?>" class="package_image" width="300px" height="100px" alt="">
                        </div>

                        <div class="col-md-8">
                            <div class="feature">
                                <div class="package-title mb-3">
                                    <h3>Package Name: <?= $row['packagename'] ?>
                                    </h3>
                                </div>
                                <div class="package-code d-flex align-items-center">
                                    <h4>Package Code: #PKG-<?= $row['id'] ?></h4>
                                </div>
                                <div class="feature-item py-1 d-flex ">
                                    <div class="mr-2 item-title">Package Type:</div>
                                    <div class="item-details"> <?= $row['packagetype'] ?></div>
                                </div>
                                <div class="feature-item py-1 d-flex ">
                                    <div class="mr-2 item-title">Package Location: </div>
                                    <div class="item-details"> <?= $row['packagelocation'] ?></div>
                                </div>
                                <div class="feature-item py-1 d-flex ">
                                    <div class="mr-2 item-title">Package Feature: </div>
                                    <div class="item-details"> <?= $row['packagefeature'] ?> </div>
                                </div>
                                <div class="feature-item py-1 d-flex ">
                                    <div class="mr-2 item-title">Package Duration </div>
                                    <div class="item-details">  <?= $row['packageduration'] ?> &nbsp; days</div>
                                </div>
                                <div class="feature-item py-1 d-flex ">
                                    <div class="mr-2 item-title">Package Price:  </div>
                                    <div class="item-details"><?= $row['packageprice'] ?> &nbsp; USD</div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-12 py-4">
                            <div class="details">
                                <h4>Package Details</h4>
                                <p><?= $row['packagedetails'] ?></p>
                            </div>
                        </div>

                        <div class="col-md-8  offset-2 align-items-center text-center">
                            <h4>Book you package Now</h4>
                            <hr>
                            <div>
                                <form action="functions/package_booking.php" method="post">  
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group w-50" >
                                            <label for="exampleInputEmail1" class="font-weight-bold">Your Jounry Date:</label>
                                            <input type="date" name="Start_date" class="form-control" id="exampleInputEmail1" required>
                                            <input type="hidden" name="package_id" value="<?php echo $pkgid; ?>">
                                            <script>
                                            var dateInput = document.querySelector('input[type="date"]');
                                            var today = new Date().toISOString().split('T')[0];
                                            dateInput.setAttribute('min', today);
                                            var maxDate = new Date();
                                            maxDate.setFullYear(maxDate.getFullYear() + 1);
                                            var maxDateFormatted = maxDate.toISOString().split('T')[0];
                                            
                                            dateInput.setAttribute('max', maxDateFormatted);
                                        </script>
                                        </div>
                                    </div>
                                    <?php 
                                        $user_email = $_SESSION['user_email'] ?? '';
                                   
                                        if(!empty($user_email)){ ?>
                                            <button  type="submit" name="package_book_btn" class="btn btn-outline-success">Book Now</button>
                                   <?php     }else{ ?>
                                            <a href="#"   class="btn btn-outline-success" data-toggle="modal" data-target="#signin_modal">Book Now</a>
                                     <?php   } ?>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>


        </div>
       

    </section>
    <!--  tour package end here -->







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

    <?php if(isset($_SESSION['user_profile_update_data'])) {?>
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