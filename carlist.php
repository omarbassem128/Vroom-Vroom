<?php
    include("dbconnection.php");
    $sql = "SELECT * FROM car";
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="car.css">
    <link rel="stylesheet" href="carlist.css"
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/36ecb97839.js"
      crossorigin="anonymous"></script>
      <script defer src="navbar.js"></script>
</head>
<body>
    <navbar-component></navbar-component>
    <form class="container" action="search.php" method="post">
            <div class="search-wrapper">
                <input type="search" id="search" class="searchTerm" name="query" placeholder="Search for cars..." data-search>
                <button type="submit" class="searchButton">
                    <img class="search-icon-button" src="search-icon-png-9964.png" alt="">
                </button>
            </div>
    </form>

    <div class="main-content" id="page"></div>
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
      ?>
        <script type="module">
            import {RentalC} from "./rentalcontainer.js";
            const dataFromPhp = JSON.parse('<?php echo $jsonData ?>');
            for(const card of dataFromPhp)
            {
                const template = RentalC(card);
                page.innerHTML += template; 
            }
        </script>
</body>
</html>
</html>