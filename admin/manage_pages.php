<?php
session_start();
require_once "includes/connec.php";
if(!$_SESSION['authenticate_admin_name']){
  header('location: index.php');
}
if(isset($_POST['update_page'])){
  $type = $_SESSION['page_type'] ;
  $page_details = mysqli_escape_string($con, $_POST['page_details']);
  $update_page_query = "UPDATE `pages` SET `details`='$page_details' WHERE `type` ='$type'";
  $update_page_query_run = mysqli_query($con, $update_page_query);

  if($update_page_query_run){
      $_SESSION['page_update']= "Page content update successfully";
  }else{
      $_SESSION['page_update']= "Page content not updated";
  }
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
  <title>Manage Package</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <script type="text/javascript" src="nicEdit.js"></script>
  <script type="text/javascript" src="core/rte.js"></script>
  </script>
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
          <div class="col-md-12">
              <div class="card px-3  mb-4">
                
              <?php
                if(isset($_SESSION['page_update'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>hello!</strong> <?= $_SESSION['page_update']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> <?php
                    unset($_SESSION['page_update']);
                }
                ?>
                <div class="card-body">
                  <form action="" method="post" >
                  <div class="form-group">
                    <label for="selectype">Select page for updating data:</label>
                    <select class="form-control" name="state" id="selectype" onChange="window.location.href=this.value;">
                      <option value="">Select a page</option>
                      <option value="manage_pages.php?type=terms">terms and condition</option>
                      <option value="manage_pages.php?type=privacy">privacy and policy</option>
                      <option value="manage_pages.php?type=about">aboutus</option>
                      <option value="manage_pages.php?type=contact">Contact us</option>
                     </select>
                    </div>
                    <?php
                      $type = $_GET['type'] ?? '';
                      $_SESSION['page_type'] = $type;
                    
                    
                      $select_page_query = "SELECT * FROM `pages` WHERE `type` ='$type'";
                      $select_page_query_run = mysqli_query($con, $select_page_query);
                      $row = mysqli_fetch_assoc($select_page_query_run); 
                      ?>
                      <div class="form-group row col-md-6">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Selected page:</label>
                    <div class="col-sm-7 p-2">
                    <strong><?= $row['type'] ?></strong>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="package_details">Package Details</label>
                      <textarea class="form-control" id="myNicEditor" name="page_details" rows="5" cols="50"  required ><?= $row['details'] ?></textarea>             
                     </div>
                    <button type="submit" name="update_page" class="btn btn-primary">UPDATE</button>
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