<?php
session_start();
require_once "../includes/connec.php";
if(!$_SESSION['authenticate_admin_name']){
  header('location: index.php');
}
// cancel tour by admin
$booking_id = $_GET['bkid'];
$action = $_GET['action'];
if($action == "cancel"){
  $status = "cancel" ;
  $cancelby = "admin" ;
  $update_query = "UPDATE `booking` SET `status`='$status', `cancellby`= '$cancelby' WHERE `id` = '$booking_id' ";
  $update_query_run = mysqli_query($con, $update_query);
  if($update_query_run){
    echo '<script>alert("Tour package cancel !");
    window.location.href = "../manage_booking.php?cancelby=admin";
    </script>';
  }

}  
// confirm tour by admin
elseif($action == "confirm"){
  $status = "confirm" ;
  $update_query = "UPDATE `booking` SET `status`='$status' WHERE `id` = '$booking_id' ";
  $update_query_run = mysqli_query($con, $update_query);
  if($update_query_run){
    echo '<script>
    alert("Tour package confirmed successfully!");
    window.location.href = "../manage_booking.php";
  </script>';
  }
}

?>

