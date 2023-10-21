<?php
require_once "../includes/connec.php";
session_start();
if(isset($_POST['login_btn'])){
    $user_name = mysqli_escape_string($con, $_POST['user_name']);
    $password = mysqli_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM `admin` WHERE `username`= '$user_name' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) >0){
        $_SESSION['authenticate_user_name'] = $user_name ;

        header('location: ../dashboard.php');

    }else{
        $_SESSION['message'] = "login failed";
        header('location: ../index.php');
    }
}
?>
