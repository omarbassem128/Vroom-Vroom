<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "ay7aga";
        $port = 3308;
        $con = mysqli_connect($hostname, $username, $password, $database, $port) or die("Error: Can't Connect to Server. " . mysqli_connect_error());
?>