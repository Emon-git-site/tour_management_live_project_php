<?php
session_start();
require_once "../includes/connec.php";
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
  <title>Manage Users</title>
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
            <h1 class="h3 mb-0 text-gray-800">Manage Booking</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Booking</li>
            </ol>
          </div>


          <div class="row mb-4 justify-content-center container-fluid m-0 p-0">
              <!-- Simple Tables -->
             <div class="card">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">BOOKING ID</th>
                        <th class="text-center">PACKAGE ID</th>
                        <th class="text-center">PACKAGE NAME</th>
                        <th class="text-center">MOBILE NO</th>
                        <th class="text-center">FROM date</th>
                        <th class="text-center">END date</th>
                        <th class="text-center">STATUS</th>
                        <th class="text-center">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $select_booking_query = "SELECT booking.id as bkid, booking.packageid as packageid, booking.updatedate as canceldate, booking.useremail as uemail, booking.status as pstatus, booking.cancellby as cancellby, 
                    booking.fromdate as fdate, booking.enddate as edate, tourpackages.packagename as pname,  tourpackages.packagelocation as plocation, user.fullname as uname, user.mobile as mobile FROM booking JOIN tourpackages ON 
                    booking.packageid = tourpackages.id JOIN user ON booking.useremail = user.email ";
                     $select_booking_query_run = mysqli_query($con , $select_booking_query);
                     while($row = mysqli_fetch_assoc($select_booking_query_run)){?>
                     <tr>
                      <td class="text-center">#BK<?= $row['bkid']?></td>
                      <td class="text-center">#PK<?= $row['packageid']?></td>
                      <td class="text-center"><?= $row['pname']?></td>
                      <td class="text-center"><?= $row['mobile']?></td>
                      <td class="text-center"><?= $row['fdate']?></td>
                      <td class="text-center"><?= $row['edate']?></td>
                      <td class="text-center">
                       <?php 
                        $canceldate = $row['canceldate'];
                        $date = strtotime($canceldate);
                         $date_cancel = date("Y-m-d", $date);
                         $cancelby = $row['cancellby'];
                    
                        if($row['pstatus'] == "cancel" and $cancelby == "admin"){
                          echo "Package cancel by admin-".$date_cancel;
                        }
                        elseif($row['pstatus'] == "confirm"){
                          echo "Package confirm at-".$date_cancel;
                        }elseif($row['pstatus'] == "cancel" and $cancelby == "user"){
                          echo "Package cancel by user-".$date_cancel;
                        }
                        else{
                          echo "pending";
                        }
                       ?>
                      </td>
                      <td class="text-center">
                       <?php  if($row['pstatus'] == "pending"){ ?>
                        <a href="functions/booking_manage_admin.php?bkid=<?= $row['bkid'] ?>&action=cancel" class="btn btn-sm btn-warning"> CANCEL</a>
                        <a href="functions/booking_manage_admin.php?bkid=<?= $row['bkid'] ?>&action=confirm" class="btn btn-sm btn-primary">CONFIRM</a> <?php } ?>
                      </td>
                     </tr>
                     <?php } ?>
                    
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
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