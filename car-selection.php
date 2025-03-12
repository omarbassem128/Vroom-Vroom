<?php
    include("dbconnection.php");
    session_start();
    $email = $_SESSION['email'];
    $pickupdate = $_POST['pickupDate'];
    $carname = $_POST['carName'];
    echo $pickupdate;
    echo $carname;
    $sql = "SELECT * FROM car WHERE pickupDate = '$pickupdate' AND carName = '$carname'";
    $resultt = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($resultt);
    $carimage = $row['carImage'];
    $price = $row['price'];
    $drivingmode = $row['drivingMode'];
    $seats = $row['seats'];
    $sql2 = "INSERT INTO rentals values('$email', '$pickupdate', '$carname', '$carimage', '$price', '$seats', '$drivingmode')";
    mysqli_query($con, $sql2);
    header('Location: checkoutpage.php');
?>