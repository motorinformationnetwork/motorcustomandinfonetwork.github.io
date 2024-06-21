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
                <a href="home.php"><img src="imglg/Project Logo (1).png" alt=""></a>
                </div>
            <nav>
                <div class="navbar">
                    <ul class="navbarlinks">
                            <li><a href="hm.html" class="active">Home</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Information</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="others">
                        <a href="Register.php" href="#" data-text="Login / Register"><button class="addBtn"><i class='bx bxs-user-circle'></i>Login / Register</button></a>
                        <i class='bx bx-menu-alt-left' id="menuBtn"></i>
                </div>
            </nav>    
        </header>

            <?php

                include("php/config.php");
                if(isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                    
                    if (mysqli_num_rows($verify_query) !=0 ){
                        echo "<div class='message'>
                                <p>This email is used, Try another One Please!</p>
                            <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></div> ";
                    }
                    else{

                        mysqli_query($con,"INSERT INTO users(Username, Email, Password) VALUES('$username','$email','$password')") or die("Error Occured");

                        echo "<div class='message'>
                                <p>Registration successfully!</p>
                            <br>";
                        echo "<a href='index.php'><button class='btn'>Login Now</button></div> ";
                    }

                    }else{
            ?>
        
            <div class="wrapper2">
                <div class="form-box register">
                    <h2>Registration</h2>
                    <form action="register.php" method="POST">
                        <form id="registerForm">
                        <div class="input-box">
                            <span class="icon">
                            <ion-icon name="person"></ion-icon></span>
                            <input type="text" id="username" name="username" required>
                            <label for="username">Username</label>
                        </div>
                            <div class="input-box">
                                <span class="icon">
                                <ion-icon name="mail"></ion-icon></span>
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon">
                                <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" id="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                           
                            <button type="submit" name="submit" class="btn">Register</button>
                            <div class="login-register">
                            <p>Already have an account?<a href="index.php" class="login-link">Login</a></p>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>

        

<script src="javalg/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>