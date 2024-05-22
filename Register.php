<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Password = $_POST['pass'];

        if(!empty($Email) && !empty($Password) && !is_numeric($Email))
        {
            $query = "insert into form (username, email, pass) values ('$Username', '$Email', '$Password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---- titile -->
    <title>Motor Custom and Info Network - Create your dream cars</title>
    <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- customer css file ----->   
    <link rel="stylesheet" href="csslg/style.css">
    <!--- boxicon cdn link ----->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://blogfonts.com/css/aWQ9MTUxNTEzJnN1Yj01MTMmYz1mJnR0Zj1Gb3JtdWxhMS1Cb2xkX3dlYl8wLnR0ZiZuPWZvcm11bGExLWRpc3BsYXktYm9sZA/Formula1 Display Bold.ttf" rel="stylesheet" type="text/css"/>
    <title>Remove Bullets</title>
    <style>
      body{
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
    
</head>
<body>
  
        <header class="header">
            <div class="logo">
                <img src="imglg/Project Logo (1).png" alt="">
            </div>
            <nav>
                <div class="navbar">
                    <ul class="navbarlinks">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Information</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="others">
                    <i class='bx bx-search' ></i> 
                    <i class='bx bxs-download cart'></i> 
                    <a href="file:///C:/Users/User/OneDrive%20-%20mmu.edu.my/PROJECT%20WEBSTIE%20CODING/login/index.html" href="#" data-text="Login / Register"><button class="addBtn"><i class='bx bxs-user-circle'></i>Login / Register</button></a>  
                    <i class='bx bx-menu-alt-left' id="menuBtn"></i>
                </div>
            </nav>    
        </header>
        
        
        
        <div class="wrapper2">
            <div class="form-box register">
                        <h2>Registration</h2>
                <form method="POST">
                    <form id="registerForm">
                        <div class="input-box">
                            <span class="icon">
                            <ion-icon name="person"></ion-icon></span>
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                            <div class="input-box">
                                <span class="icon">
                                <ion-icon name="mail"></ion-icon></span>
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon">
                                <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" name="pass" required>
                                <label>Password</label>
                            </div>
                            <div class="remember-forgot">
                            <a href="#">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn">Register</button>
                            <div class="login-register">
                            <p>Already have an account?<a href="Login.php" class="login-link">Login</a></p>
                        </div>
                    </form>
                </form>
            </div>
        </div>

        

<script src="javalg/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>