<?php
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
  <title>Manage Enquiries</title>
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
        <div class="container-fluid" id="container-wrapper" style="height: 80vh;">
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Enquiries</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Enquiries</li>
            </ol>
          </div>


          <div class="row mb-4 justify-content-center">
              <!-- Simple Tables -->
             <div class="card  ">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <?php
                if(isset($_SESSION['quirey_read'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>hello!</strong> <?= $_SESSION['quirey_read']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> <?php
                    unset($_SESSION['quirey_read']);
                }
                ?>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>TICKET ID</th>
                        <th>NAME</th>
                        <th>MOBILE NO/EMAIL</th>
                        <th>SUBJECT</th>
                        <th>DESCRIPTION</th>
                        <th>POSTING DATE</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      require_once "../includes/connec.php";
                     
                      // enquiry data show
                      $select_query_data = "SELECT * FROM `inquiry`";
                      $select_query_data_run = mysqli_query($con, $select_query_data);
                    
                      while($row = mysqli_fetch_assoc($select_query_data_run)){ ?>
                          <tr>
                              <td><?= $row['fullname'] ?></td>
                              <td><?= $row['email'] ?></td>
                              <td><?= $row['mobile'] ?></td>
                              <td><?= $row['subject'] ?></td>
                              <td><?= $row['description'] ?></td>
                              <td><?= $row['postindate'] ?></td>
                              <?php
                              if($row['status'] == 0){ ?> 
                                  <td><a href="functions/enquiry_read.php?id=<?=base64_encode($row['id']) ?>" onclick="return confirm('Do you want to read ?')">pending</a></td>
                                  <?php } else{ ?>
                                    <td><a href="?id=<?=base64_encode($row['id']) ?>" >read</a></td>
                              <?php } ?>
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