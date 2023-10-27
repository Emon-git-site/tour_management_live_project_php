<?php
session_start();
require_once "../includes/connec.php";
if (!$_SESSION['authenticate_admin_name']) {
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
        <div class="container-fluid" id="container-wrapper" style="height: 80vh;">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Issues</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Issues</li>
            </ol>
          </div>

          <div class="row mb-4 justify-content-center">
            <!-- Simple Tables -->
            <div class="card">
              <div class="card-header py-3 ">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>#</th>
                      <th>NAME</th>
                      <th>MOBILE NO</th>
                      <th>EMAIL ID</th>
                      <th>ISSUES</th>
                      <th>DESCRIPTION</th>
                      <th>POSTING DATE</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $select_query = "SELECT issue.id as id, user.fullname as fullname, user.mobile as mobile, user.email as email, issue.issue as issue, 
                    issue.description as describ, issue.postingdate as postingdate, issue.adminremark as adminremark  FROM user  JOIN issue  ON user.email = issue.useremail ";

                    $select_query_run = mysqli_query($con, $select_query);
                    while ($row = (mysqli_fetch_assoc($select_query_run))) { ?>
                      <tr>
                        <td>00<?= $row['id'] ?></td>
                        <td><?= $row['fullname'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['issue'] ?></td>
                        <td><?= $row['describ'] ?></td>
                        <td><?= $row['postingdate'] ?></td>
                        <td>
                            <a class="btn btn-primary" style="text-decoration: none" href="#" data-toggle="modal" data-target="#admin_remark">view</a>
                        </td>
                      </tr>
                      <!--admnin remark modal-->
                      <div class="modal fade" id="admin_remark" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title " id="exampleModalLabelLogout">Update Remark</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <?php 
                              if(isset($_POST['issue_update_btn'])){
                               $remark = mysqli_escape_string($con, $_POST['remark']);
                              $issue_id = $row['id'] ;
                               $update_issue = "UPDATE `issue` SET `adminremark`='$remark' WHERE `id` = '$issue_id'";
                               $update_issue_run = mysqli_query($con, $update_issue); }
                              ?>

                              <form action="" method="post">
                                <div class="form-group">
                                  <label for="remark">Remark:</label>
                                  <textarea class="form-control" id="remark" name="remark" rows="4"><?= $row['adminremark'] ?></textarea>
                                </div>
                                <button type="submit" name="issue_update_btn" class="btn btn-primary">Update</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php   }  ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer"></div>
            </div>

            <!--Row-->


            <!-- Modal Logout -->
            <?php require_once "includes/log_out_modal.php" ?>
            <!-- modal myprofile -->
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