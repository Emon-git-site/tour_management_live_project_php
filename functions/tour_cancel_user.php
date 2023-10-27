<?php
session_start();
require_once "../includes/connec.php";
// tour cancel by user
$booking_id = $_GET['bkid'];
$status = "cancel";
$cancelby = "user";
$booking_update_query = "UPDATE `booking` SET `status`='$status', `cancellby`= '$cancelby' WHERE `id` = '$booking_id'";
$booking_update_query_run = mysqli_query($con, $booking_update_query);
if($booking_update_query_run){
    echo '<script type="text/javascript">
        alert("Tour package cancel!");
        window.location.href = "../tour_history.php";
      </script>';
}

?>

