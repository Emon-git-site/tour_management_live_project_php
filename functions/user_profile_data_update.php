
<?php
require_once "../includes/connec.php";
session_start();

if(isset($_POST['user_register_data_update_btn'])){
    $full_name                            = mysqli_escape_string($con, $_POST['full_name']);
    $mobile_number                        = mysqli_escape_string($con, $_POST['mobile_number']);
    $email                                = mysqli_escape_string($con, $_POST['email']);
    $_SESSION['user_profile_update_data'] = $email ;
    $user_email                           = $_SESSION['user_email'];
    $update_query                         = "UPDATE `user` SET `fullname`='$full_name',`mobile`='$mobile_number',`email`='$email' WHERE `email`= '$user_email'" ;
    $update_query_run                     =  mysqli_query($con, $update_query);

    if($update_query_run){
        $_SESSION['profile_data_update']              = "User profile data updated successfully";
        header('location: ../index.php');
       
    } else{
        $_SESSION['profile_data_update']              = "User profile data update failed";
        header('location: ../index.php');
    }
}
?>