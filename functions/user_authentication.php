<?php
require_once "../includes/connec.php";
session_start();

// user registration
if(isset($_POST['user_register_btn'])){
    $full_name = mysqli_escape_string($con, $_POST['full_name']);
    $mobile_number = mysqli_escape_string($con, $_POST['mobile_number']);
    $email = mysqli_escape_string($con, $_POST['email']);
    $password = mysqli_escape_string($con, $_POST['password']);
    $registration_query = "INSERT INTO `user`(`fullname`, `mobile`, `email`, `password`)
     VALUES ('$full_name', '$mobile_number', '$email', '$password') ";
     $registration_query_run = mysqli_query($con, $registration_query);
     if($registration_query_run){
        $_SESSION['user_email'] = $email;
        $_SESSION['message'] ="You Register Successfully";
        header('location: ../index.php');
     }else{
        $_SESSION['message'] = "Your Registration failed";
        header('location: ../index.php');

     }

}
// sign in

if(isset($_POST['signin_btn'])){
   $email = mysqli_escape_string($con, $_POST['email']);
   $password = mysqli_escape_string($con, $_POST['password']);
   $signin_query = "SELECT * FROM `user` WHERE `email`= '$email' ";
   $signin_query_run = mysqli_query($con, $signin_query);
   if(mysqli_num_rows($signin_query_run) > 0){
      $_SESSION['user_email'] = $email;
      $_SESSION['message'] = "SignIn successfully";
      header('location: ../index.php');

   } else{
      $_SESSION['message'] = "Wrong username or password";
      header('location: ../index.php');

   }
}

?>