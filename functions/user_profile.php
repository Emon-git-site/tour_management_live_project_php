<?php
require_once "../includes/connec.php";
session_start();

// user profile data show in the modal
$user_email              = base64_decode($_GET['$_SESSION["user_email"]']);
$select_user_profile     = "SELECT * FROM `user` WHERE `email` ='$user_email'" ;
$select_user_profile_run = mysqli_query($con, $select_user_profile);
$row = mysqli_fetch_assoc($select_user_profile_run);
header('location: ../includes/user_profile.php'); 
?>



