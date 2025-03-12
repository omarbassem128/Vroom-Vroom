<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width",initial-scale="1.0">
        <title>webproj1</title>
        <link rel="stylesheet" href="landing.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script defer src="navbar.js"></script>
        <script defer src="sb.js"></script>
        <?php
            include("dbconnection.php");
            session_start();
            $firstname = $_SESSION['firstname'];
        ?>
    </head>
        <body>                
            <header>
                <navbar-component></navbar-component>
            </header>
            <section class="home container">
                <div class="home-text">
                    <h1>VROOOOOOOM<br> VROOOOOOOM <br><?php echo "{$firstname}" ?></h1>
                    <a href="#" class="linbtn"> Sign up</a>
                    <searchbar-component></searchbar-component>
                </div>
            </section>
        </body>
    </html>