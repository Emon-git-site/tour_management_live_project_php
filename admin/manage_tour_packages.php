<?php
require_once "includes/connec.php";
session_start();
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
  <title>Manage Tour Packages</title>
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
            <h1 class="h3 mb-0 text-gray-800">Manage Tourpackages</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="create_tour_package.php">create package</a></li>
              <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
          </div>
 


          <div class="row mb-4 justify-content-center">
           
           <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <?php
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>hello!</strong> <?= $_SESSION['message']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> <?php
                    unset($_SESSION['message']);
                }
                ?>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">NAME`</th>
                        <th class="text-center">TYPE</th>
                        <th class="text-center">LOCATION</th>
                        <th class="text-center">PRICE</th>
                        <th class="text-center">CREATION DATE</th>
                        <th class="text-center">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $select_tourpackage_query = "SELECT * FROM `tourpackages` ";
                    $select_tourpackage_query_run = mysqli_query($con, $select_tourpackage_query);
                     $count = 1;
                     while($row = mysqli_fetch_assoc($select_tourpackage_query_run)){ ?>
                      <tr>
                        <td class="text-center"><?= $count ?></td>
                        <td class="text-center"><?= $row['packagename'] ?></td>
                        <td class="text-center"><?= $row['packagetype'] ?></td>
                        <td class="text-center"><?= $row['packagelocation'] ?></td>
                        <td class="text-center"><?= $row['packageprice'] ?></td>
                        <td class="text-center"><?= $row['createdate'] ?></td>
                        <td class="text-center"><a href="update_package.php?id=<?= base64_encode($row['id'])?>" class="btn btn-primary">UPDATE</a>
                        <a href="functions/delete_package.php?id=<?= base64_encode($row['id'])?>" class="btn btn-primary">DELETE</a></td>
                        
                      </tr>
                   <?php $count++ ;  }  ?>
                    
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