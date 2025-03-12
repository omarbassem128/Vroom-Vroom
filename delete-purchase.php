<?php
    include("dbconnection.php");
    session_start();
    $email = $_SESSION['email'];
    $carName = $_POST['carName'];
    $pickupDate = $_POST['pickupDate'];
    if(isset($_POST['delete-button'])){
        $sql = "DELETE FROM rentals WHERE userEmail = '$email' AND carName = '$carName' AND pickupDate = '$pickupDate'";
        mysqli_query($con, $sql);
        include("recent-rentals.php");
    }
?>