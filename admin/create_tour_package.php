<?php
session_start();
if(!$_SESSION['authenticate_user_name']){
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
  <title>Create Package</title>
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
            <h1 class="h3 mb-0 text-gray-800">Create Package</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Package</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
          </div>

          <div class="row mb-4 justify-content-center ">
            <div class="col-md-8">
              <div class="card px-5  mb-4">
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
                <div class="card-body">
                  <form action="functions/tourpackage.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="package_name">Package Name</label>
                      <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Create Package">
                    </div>
                    <div class="form-group">
                      <label for="package_type">Package Type</label>
                      <input type="text" class="form-control" id="package_type" name="package_type" placeholder="Package Type eg-Family Package/Couple Package">
                    </div>
                    <div class="form-group">
                      <label for="package_location">Package Location</label>
                      <input type="text" class="form-control" id="package_location" name="package_location" placeholder="Package Location">
                    </div>
                    <div class="form-group">
                      <label for="package_price">Package Price in USD</label>
                      <input type="number" class="form-control" id="package_price" name="package_price" placeholder="Package Price in USD">
                    </div>
                    <div class="form-group">
                      <label for="package_features">Package Features</label>
                      <input type="text" class="form-control" id="package_features" name="package_feature" placeholder="Package Features Eg-free Pickup-drop facility">
                    </div>
                    <div class="form-group">
                      <label for="package_details">Package Details</label>
                      <textarea class="form-control" id="package_details" name="package_details" rows="4" cols="10" placeholder=""> Package Details</textarea>             
                     </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="package_image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <button type="submit" name="create_btn" class="btn btn-primary">CREATE</button>
                    <button type="submit" class="btn btn-secondary">RESET</button>
                  </form>
                </div>
              </div>
            </div>



            <!--Row-->



            <!-- Modal Logout -->
            <?php require_once "includes/log_out.php" ?>

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