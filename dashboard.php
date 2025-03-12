<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CSS User Profile Card</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <?php
      session_start();
      include("dbconnection.php");
      $file_name = $_SESSION['file_name'];
      $firstname = $_SESSION['firstname'];
      $lastname = $_SESSION['lastname'];
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
      $phonenum = $_SESSION['phonenum'];
    ?>
    <script defer src="navbar.js"></script>
  </head>
  <body>
  <navbar-component></navbar-component>
    <div class="wrapper">
      <div class="left">
        <img src="<?php echo 'Images/'.$file_name?>" alt="user" width="100" />
        <h4><?php echo "{$firstname} {$lastname}"?></h4>
      </div>
      <div class="right">
        <div class="info">
          <h3>Information</h3>
          <div class="info_data">
            <div class="data">
              <h4>Email</h4>
              <p><?php echo $email ?></p>
            </div>
            <div class="data">
              <h4>Phone</h4>
              <p><?php echo $phonenum?></p>
            </div>
          </div>
        </div>

        <div class="rentals">
          <h3>Rentals</h3>
          <div class="rentals_data">
            <div class="data">
              <a href="recent-rentals.php">
                <button class="booking-buttons">Recent Rentals</button>
              </a>
            </div>
            <div class="data">
              <button class="booking-buttons">Rental History</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
