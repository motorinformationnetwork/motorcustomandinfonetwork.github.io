<?php
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])) {
    header("Location: index.php");
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
    <link rel="stylesheet" href="CSS MHPLOG/style.css">
    <!--- boxicon cdn link ----->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://blogfonts.com/css/aWQ9MTUxNTEzJnN1Yj01MTMmYz1mJnR0Zj1Gb3JtdWxhMS1Cb2xkX3dlYl8wLnR0ZiZuPWZvcm11bGExLWRpc3BsYXktYm9sZA/Formula1 Display Bold.ttf" rel="stylesheet" type="text/css"/>
    <title>Remove Bullets</title>
    
</head>
<body>
    
    <div class="background">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="IMG MHP/3772662-hd_1920_1080_25fps.mp4" type="video/mp4">
        </video>
        
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

        <div class="content">
                <h1>WELCOME</h1>
                <div class="main-box top">
                    <div class="top">
                        <div class="box">
                            <p>User <b><?php echo $res_Uname ?></b></p>
                        </div>
                    </div>
                </div>
                <a href="hm.php" href="#" data-text="&nbsp;GETSTART">&nbsp;GETSTART&nbsp;</a>
        </div>











    









    

    
    <!---custom script file -->
    <script src="JS MHP/script.js"></script>

</body>
</html>
