
<?php
session_start();
require_once "../includes/connec.php";

if(isset($_GET['id'])){
$id = base64_decode($_GET['id']);
$status =1;
$update_query = "UPDATE `inquiry` SET `status`='$status' WHERE `id`= $id";
$update_query_run = mysqli_query($con, $update_query); 
if($update_query_run){
    $_SESSION['quirey_read'] = " query read Successfully";
    header('location: ../manage_enquiries.php');
}
}
?>