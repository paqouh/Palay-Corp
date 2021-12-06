<?php

    require 'backend/register.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="green"></div>
    <div class="green-yellow"></div>
    <div class="light-green"></div>
    <div class="container">
        <div class="intro">
            <div class="content">
                <div class="logo"><img src="images/agri-icon.png" alt="img"><h3>Palay <span>Corp</span></h3></div>
                <h1>Welcome!</h1>
                <p>Get the top quality Philippine Rice</p>
                <button onclick="window.location='signup.php';" type='submit'>Sign up</button>
            </div>
        </div>
        <div class="create">
            <h1>Login Here!</h1>
            <div class="soc_icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-google"></ion-icon>
            <ion-icon name="logo-linkedin"></ion-icon>
            </div>
            <p>or use your email to logged in</p>

            <!--Registration Form-->

            <form action="main.php" class="reg-form" method="POST">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name='password' placeholder="Password">
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>