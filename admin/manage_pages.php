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
  <title>Create Package</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <script type="text/javascript" src="nicEdit.js"></script>
  <script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>
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
            <h1 class="h3 mb-0 text-gray-800">Manage Pages</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">pages</li>
            </ol>
          </div>



          <div class="row mb-4 justify-content-center">
          <div class="col-md-9">
              <div class="card px-5  mb-4">

                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Select page for updating data:</label>
                    <select class="select2-single-placeholder form-control" name="state" id="select2SinglePlaceholder">
                      <option value="">Select a page</option>
                      <option value="Aceh">terms and condition</option>
                      <option value="Sumatra Utara">privacy and policy</option>
                      <option value="Sumatra Barat">aboutus</option>
                      <option value="Riau">Contact us</option>
                     </select>
                    </div>

                    <div class="form-group">
                      <label for="package_details">Package Details</label>
                      <textarea class="form-control" id="package_details" name="package_details" rows="4" cols="10" placeholder=""></textarea>             
                     </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </form>
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