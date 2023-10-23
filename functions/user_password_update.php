<?php
require_once "../includes/connec.php";
session_start();

// user password update
if(isset($_POST['user_password_update_btn'])){
    $current_password =mysqli_escape_string($con, $_POST['current_password']);
    $new_password =mysqli_escape_string($con, $_POST['new_password']);
    $conform_password =mysqli_escape_string($con, $_POST['conform_password']);
    if($new_password == $conform_password){
    $select_query = "SELECT * FROM `user` WHERE `password`= '$current_password' ";
    $execute_query = mysqli_query($con, $select_query);
    if (mysqli_num_rows($execute_query) > 0){
        $update_query = "UPDATE `user` SET `password`='$new_password' WHERE `password` = '$current_password' ";
        $execute_query = mysqli_query($con, $update_query);
        if($execute_query){
            header('location: ../index.php');
        }else{
            header('location: ../index.php');
        }
    }else{
        header('location: ../index.php');
    }
    }
}

?>