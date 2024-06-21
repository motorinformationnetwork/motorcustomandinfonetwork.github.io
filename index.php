<?php 
   session_start();
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
                        <a href="index.php" href="#" data-text="Login / Register"><button class="addBtn"><i class='bx bxs-user-circle'></i>Login / Register</button></a>
                        <i class='bx bx-menu-alt-left' id="menuBtn"></i>
                </div>
            </nav>    
        </header>


        <?php

        include("php/config.php");

        if(isset($_POST['submit'])) {
          $email = mysqli_real_escape_string($con,$_POST['email']);
          $password = mysqli_real_escape_string($con,$_POST['password']);

          $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("select Error");
          $row = mysqli_fetch_assoc($result);

          if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['id'] = $row['Id'];
          } else {
            echo "<div class='message'>
              <p>Wrong Username or Password</p>
              <br>";
            echo "<a href='index.php'><button class='btn'>Go Back</button></div>";
          }
          if(isset($_SESSION['valid'])){
            header("Location: home.php");
          }
        }else{

        ?>

        <!---login/register form-->
        <div class="wrapper">
          <div class="form-box login">
              <h2>Login</h2>
              <form action="" method="POST">
              <form id="loginForm">
                  <div class="input-box">
                      <span class="icon">
                        <ion-icon name="mail"></ion-icon></span>
                        <input type="text" id="email" name="email" autocomplete="off" required>
                        <label for="email">Email</label>
                  </div>
                  <div class="input-box">
                      <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password" name="password" autocomplete="off" required>
                        <label for="password">Password</label>
                  </div>
                  
                  <button type="submit" name="submit" class="btn">Login</button>
                  <div class="login-register">
                    <p>Don't have an account?<a href="Register.php" class="register-link">Register</a></p>
                  </div>
              </form>
          </div>
        </div>
        <?php } ?>
      </div>
      


<!---custom script file -->
<script src="javalg/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>