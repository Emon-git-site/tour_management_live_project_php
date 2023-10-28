<?php
session_start();
require_once "../includes/connec.php";
// submit package details in the database
if(isset($_POST['package_book_btn'])){
    $package_id = $_POST['package_id'];
    $select_package_query = " SELECT * FROM `tourpackages` WHERE `id` ='$package_id' ";
    $select_package_query_run = mysqli_query($con, $select_package_query);
    $row = mysqli_fetch_assoc($select_package_query_run);
     $user_email = $_SESSION['user_email'];

    $Start_date = mysqli_escape_string($con, $_POST['Start_date']);
    $package_id = $row['id'];
    $tour_duration = $row['packageduration'];
    $status = "pending";
 
    $insert_query = "INSERT INTO `booking`(`packageid`,`useremail`, `fromdate`, `enddate`,  `status`)
                   VALUES ('$package_id', '$user_email', '$Start_date', DATE_ADD('$Start_date', INTERVAL '$tour_duration' DAY), '$status') ";

    $insert_query_run = mysqli_query($con, $insert_query);
    if($insert_query_run){ 
        echo '<script type="text/javascript">
        alert("Tour package Booking successfully!");
        window.location.href = "../package_details.php?id=' . $package_id . '";
      </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Tour package Booking failed!");
        window.location.href = "../package_details.php?id=' . $package_id . '";
      </script>';
    }
}


?>