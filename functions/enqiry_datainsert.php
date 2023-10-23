<?php
session_start();
require_once "../includes/connec.php";

if(isset($_POST['submit_quiry_btn'])){
$full_name = mysqli_escape_string($con, $_POST['full_name']);
$email = mysqli_escape_string($con, $_POST['email']);
$mobile_number = mysqli_escape_string($con, $_POST['mobile_number']);
$subject = mysqli_escape_string($con, $_POST['subject']);
$description = mysqli_escape_string($con, $_POST['description']);
$insert_query = "INSERT INTO `inquiry`(`fullname`, `email`, `mobile`, `subject`, `description`) VALUES
 ('$full_name', '$email', '$mobile_number', '$subject', '$description')";
$insert_query_run = mysqli_query($con, $insert_query);
if($insert_query_run) { 
    $_SESSION ['enquiry_message'] = "Enquiry form data inserted successfully";
     header('location: ../enquiry.php');
}
else {
     $_SESSION ['enquiry_message'] = "Enquiry form data insert failed";
header('location: ../enquiry.php');
}
}
?>