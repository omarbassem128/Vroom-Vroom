<?php
    include("dbconnection.php");
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM user WHERE username = '$email' AND pass = '$pass'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
        $_SESSION['profilepic'] = $row['profilePic'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['phonenum'] = $row['phonenum'];
        header('Location: carlist.php');
    }
    else
    {
        echo"Incorrect username or password. try again";
        include("login.php");
    }
?>