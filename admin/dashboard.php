<?php
session_start();
require_once "includes/connec.php";
if(!$_SESSION['authenticate_admin_name']){
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>TourAdmin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   <?php require_once "includes/sidebar.php" ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php require_once "includes/header.php" ?> 
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
 


          <div class="row mb-4">
            <!-- USERS -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><h4>Users</h4></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                         $select_user_query = "SELECT * FROM `user` ";
                         $select_user_query_run = mysqli_query($con, $select_user_query);
                         $user_number = mysqli_num_rows($select_user_query_run);
                         echo "$user_number";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-user fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- BOOKINGS -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><h4>Bookings</h4></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                         $select_booking_query = "SELECT * FROM `booking` ";
                         $select_booking_query_run = mysqli_query($con, $select_booking_query);
                         $booking_number = mysqli_num_rows($select_booking_query_run);
                         echo "$booking_number";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ENQUIRIES -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><h4>Enquiries</h4></div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                      <?php
                         $select_enquiry_query = "SELECT * FROM `inquiry` ";
                         $select_enquiry_query_run = mysqli_query($con, $select_enquiry_query);
                         $enquiry_number = mysqli_num_rows($select_enquiry_query_run);
                         echo "$enquiry_number";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TOTAL PACKAGES -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><h4>Total Packages</h4></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                         $select_tour_package_query = "SELECT * FROM `tourpackages` ";
                         $select_tour_package_query_run = mysqli_query($con, $select_tour_package_query);
                         $tour_package_number = mysqli_num_rows($select_tour_package_query_run);
                         echo "$tour_package_number";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <!-- ISSUES RIAISED -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase  mb-1"><h4>Issues Riaised</h4></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                         $select_issue_query = "SELECT * FROM `issue` ";
                         $select_issue_query_run = mysqli_query($con, $select_issue_query);
                         $issue_number = mysqli_num_rows($select_issue_query_run);
                         echo "$tour_package_number";
                        ?>
                      </div>
                     </div>
                    <div class="col-auto">
                    <i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         
          <!--Row-->

     

          <!-- Modal Logout -->
          <?php require_once "includes/log_out_modal.php" ?>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php require_once "includes/footer.php" ?> 

      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>