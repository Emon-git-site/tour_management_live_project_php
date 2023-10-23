<?php
session_start();
if(!$_SESSION['user_email']){
    header('location: ../index.php');
  }
  unset ($_SESSION['user_email']);
  header('location: ../index.php');
?>