<?php
require_once "../includes/connec.php";
session_start();
if(!$_SESSION['authenticate_user_name']){
  header('location: index.php');

}
$id = base64_decode($_GET['id']);
$delete_query = "DELETE FROM `tourpackages` WHERE `id`='$id'";
$delete_query_run = mysqli_query($con, $delete_query);
if($delete_query_run){
    $_SESSION['message']= "Delete package successfully" ;
    header('location: ../manage_tour_packages.php');
}
?>