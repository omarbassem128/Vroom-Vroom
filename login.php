<!DOCTYPE html>
<html lang="en">

<html>
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width-device-width, 
    initial-scale =1.0"> 
    <title>MyShop Login</title>
    <link rel = "stylesheet" href="style.css"> 
    <link href = 'https://unpkg.com/boxicons@2.1.4/css/ boxicons.min.css' rel = 'stylesheet'> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<div class="wrapper">
    <form action="login_data.php" method="post">
        <h2>Login</h2>
        
        <div class="input-box">
            <input type="email" placeholder=" Email" name="email" required>
            <i class='bx bxs-envelope'></i>
        </div>
        
        <div class="input-box">
            <input type="password" placeholder="  Password" name="pass" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        
        <div class="rememberMe">
            <label><input type="checkbox"> Remember me </label>
        </div>
            <input type="submit" class="login" value="Login">

        
        <div class="register-link">
            <p>I'm new to MyShop. <a href="#"> Register </a></p> 
        <div>
    </form>    
</div>
</body>
</html>
