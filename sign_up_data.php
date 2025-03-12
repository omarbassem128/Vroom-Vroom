<?php
    session_start();
        include("dbconnection.php");
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['file_name'] = $_FILES['image']['name'];
        $_SESSION['phonenum'] = $_POST['phonenum'];
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
        $file_name = $_SESSION['file_name'];
        $phonenum = $_SESSION['phonenum'];
        move_uploaded_file($_FILES['image']['tmp_name'],'Images/'.$_SESSION['file_name']);
        $query = "INSERT INTO user(username, pass, profilePic, firstname, lastname, phonenum) values('$email', '$password','$file_name', '$firstname', '$lastname','$phonenum')";
        mysqli_query($con, $query);
        header('Location: landing.php');
?>