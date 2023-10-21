<?php
session_start();
 $id = $_SESSION['package_id'] ;
require_once "../includes/connec.php";
 if(isset($_POST['update_btn'])){
    $package_name = mysqli_escape_string($con, $_POST['package_name']);
    $package_type = mysqli_escape_string($con, $_POST['package_type']);
    $package_location = mysqli_escape_string($con, $_POST['package_location']);
    $package_price = mysqli_escape_string($con, $_POST['package_price']);
    $package_feature = mysqli_escape_string($con, $_POST['package_feature']);
    $package_details = mysqli_escape_string($con, $_POST['package_details']);
    $package_image = mysqli_escape_string($con, $_POST['package_image']);

     // accessing image
     $package_image =$_FILES['package_image']['name'];
     $temporary_image_name = $_FILES['package_image']['tmp_name'];
      //image upload folder
     move_uploaded_file($temporary_image_name, "../img/package_img/$package_image");
    
    $update_query = "UPDATE `tourpackages` SET `packagename`='$package_name',`packagetype`='$package_type',
                   `packagelocation`='$package_location', `packageprice`='$package_price',`packagefeature`='$package_feature',
                   `packagedetails`='$package_details',`packkageimage`='[value-8]' WHERE `id` = '$id'" ;
    $update_query_run = mysqli_query($con, $update_query);
    if(!$update_query_run){
        $_SESSION['message'] = "package update failed";
        header('location: ../update_package.php');
    }else{
        $_SESSION['message']= "package update successfully";
        header('location: ../update_package.php');

    }
    
 }
?>