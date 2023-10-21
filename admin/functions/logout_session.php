<?php
session_start();
if(!$_SESSION['authenticate_user_name']){
    header('location: ../index.php');
  }
  unset ($_SESSION['authenticate_user_name']);
  header('location: ../index.php');
?>