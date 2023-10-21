<?php
require_once "../includes/connec.php";
session_start();
if(isset($_POST['create_btn'])){
    $package_name = mysqli_escape_string($con, $_POST['package_name']);
    $package_type = mysqli_escape_string($con, $_POST['package_type']);
    $package_location = mysqli_escape_string($con, $_POST['package_location']);
    $package_price = mysqli_escape_string($con, $_POST['package_price']);
    $package_feature = mysqli_escape_string($con, $_POST['package_feature']);
    $package_details = mysqli_escape_string($con, $_POST['package_details']);  
    // accessing image
    $package_image =$_FILES['package_image']['name'];
    $temporary_image_name = $_FILES['package_image']['tmp_name'];
     //image upload folder
    move_uploaded_file($temporary_image_name, "../img/package_img/$package_image");

    $insert_query = "INSERT INTO `tourpackages`(`packagename`, `packagetype`, `packagelocation`, `packageprice`, `packagefeature`, `packagedetails`, `packkageimage`) VALUES
     ('$package_name', '$package_type', '$package_location', '$package_price', '$package_feature', '$package_details', '$package_image')";
      $insert_query_run = mysqli_query($con, $insert_query);

    if($insert_query_run){
        $_SESSION['message'] = "New package create successfully";
        header('location: ../create_tour_package.php');

    }else{
        $_SESSION['message'] = "New package create failed";
        header('location: ../create_tour_package.php');
    }
}
?>