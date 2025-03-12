<!DOCTYPE html>
<html lang="en">
<html>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width-device-width, 
        initial-scale =1.0"> 
        <title>MyShop Sign Up</title>
        <link rel = "stylesheet" href="style.css"> 
        <link href = 'https://unpkg.com/boxicons@2.1.4/css/ boxicons.min.css' rel = 'stylesheet'> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    </head>
<body>
<div class="wrapper">
    <form action="sign_up_data.php" method="post" enctype="multipart/form-data" target="_blank">
        <h2>Sign Up</h2>

        <div>
            <input type="file" name="image" id="chooseBtn" required>
            <label for="chooseBtn" class="short-btn">Upload Your Picture</label>
        </div>

        <div class="input-box">
            <input type="text" placeholder="  First Name" name="firstname" required>
            <i class='bx bxs-user' undefined ></i>
        </div>

        <div class="input-box">
            <input type="text" placeholder="  Last Name" name="lastname" required>
            <i class='bx bxs-user' undefined ></i>
        </div>

        <div class="input-box">
            <input type="email" placeholder=" Email" name="email" required>
            <i class='bx bxs-envelope'></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="  Password" name="password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="input-box">
            <input type="number" placeholder="  Phone Number" name="phonenum" required>
        </div>

            <button type="submit" class="sign-up">Sign Up</button>
        

        <div class="login-link">
            <p>Already have an account? <a href="login.html"> login </a></p> 
        <div>
    </form>
<div>
</body>
</html>