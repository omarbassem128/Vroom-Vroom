<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="car.css" />
    <script
      src="https://kit.fontawesome.com/36ecb97839.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
    <?php
      session_start();
      include("dbconnection.php");
      $email = $_SESSION['email'];
      $currentDate = date("Y-m-d");
      $sql = "SELECT * FROM rentals WHERE userEmail = '$email' AND pickupDate > '$currentDate' ORDER BY pickupDate DESC";
      $result = mysqli_query($con, $sql);
    ?>
    <script defer src="navbar.js"></script>
  </head>
  <body>
    <navbar-component></navbar-component>
    <div id="page"></div>
    <?php
      $jsondata;
      if(mysqli_num_rows($result) > 0)
      {
        $userData = [];
        while($row = mysqli_fetch_assoc($result))
        {
          $userData[] = $row; 
        }
        $jsonData = json_encode($userData);
      }
      else{
        echo "please rent 😣";
      }
    ?>
    <script type="module">
      import {RentalC} from "./deletecontainer.js";
      const dataFromPhp = JSON.parse('<?php echo $jsonData ?>');
      for(const card of dataFromPhp)
      {
        const template = RentalC(card);
        page.innerHTML += template; 
      }
    </script>
  </body>
</html>
