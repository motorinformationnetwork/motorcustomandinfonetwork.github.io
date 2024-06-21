<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---- titile -->
    <title>Change Profile</title>
    <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- customer css file ----->   
    <link rel="stylesheet" href="csslg/edit.css">
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
                <a href="home.php"><img src="IMG MHP/Project Logo main home.png" alt=""></a>
                </div>
            <nav>
                <div class="navbar">
                    <ul class="navbarlinks">
                            <li><a href="hm.php" class="active">Home</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Information</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="about.php">About us</a></li>
                    </ul>
                </div>
                <div class="others">
                       
                        <i class='bx bx-menu-alt-left' id="menuBtn"></i>
                </div>
            </nav>    
            
            <?php

            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
            
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }
                echo "<a href='edit.php?Id=$res_id'> <div class='right-links'><div class='pro'>Change Profile</a>";
                ?>

                <a href="logout.php"> <button class="btn">Log Out</button></a>
            </div>
        </header>

        <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                <br>";
              echo "<a href='home.php'><button class='btn'>Go Home</button></div>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                }

        ?>
  
            <div class="wrapper2">
                <div class="form-box register">
                    <h2>Change Profile</h2>
                    <form action="" method="post">
                        <form id="registerForm">
                        <div class="input-box">
                            <span class="icon">
                            <ion-icon name="person"></ion-icon></span>
                            <input type="text" id="username" name="username" required>
                            <label for="username">Username</label>
                        </div>
                            
                            <button type="submit" name="submit" class="btn">Update</button>
                            
                        </form>
                    </form>
                    <br>
                </div>
            </div>
        <?php } ?>
         

        

<script src="javalg/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>