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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"">

    <!---- titile -->
    <title>Motor Custom and Info Network - Create your dream cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--- customer css file ----->   
    <link rel="stylesheet" href="HOME PAGE/CSS php/style.css">
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

        <!--- navbar section start --->
        
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



        <!---home section!--->
        <div class="title">
            <h1>WELCOME TO MCAIN WEBSITE</h1>

        </div>
        <div class="home">
            <div class="swiper myHome">
                <div class="swiper-wrapper">
                        <div class="swiper-slide slide slide-one">
                            
                            <div class="col-1">
                                <a href=""><img src="HOME PAGE/IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt=""></a>
                            </div>

                        </div>
                        
                        <div class="swiper-slide slide slide-two">
                            <div class="col-1">
                                <a href=""><img src="HOME PAGE/IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt=""></a>
                            </div>
                         
                        </div>

                        <div class="swiper-slide slide slide-three">
                            <div class="col-1">
                                <a href=""><img src="HOME PAGE/IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt=""></a>
                            </div>
                        
                        </div>
                </div>    
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                
            </div>
        </div>


        <div class="box">
                <div class="title">
                    <h2>GET READY FOR YOUR JOURNEY</h2>
                </div>
    
                <div class="background">
                    <a href=""><img src="HOME PAGE/IMG/WhatsApp Image 2024-04-25 at 17.41.15.png"></a>
                </div>

                <div class="button">
                    <a href=""><button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button></a>
                </div>
            

                <div class="background-2">
                    <a href=""><img src="HOME PAGE/IMG/PORCHE.png"></a>
                </div>

                <div class="button-2">
                    <a href=""><button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button></a>
                </div>


                <div class="background-3">
                    <a href=""><img src="HOME PAGE/IMG/BUGATTI.png"></a>
                </div>

                <div class="button-3">
                    <a href=""><button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button></a>
                </div>

                <div class="background-4">
                    <a href="about.php"><img src="HOME PAGE/IMG/aven_ultimae_s_02.png"></a>
                </div>

                <div class="button-4">
                    <a href="about.php"><button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button></a>
                </div>

        </div>


        


    <!--- swiper java link--->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!---custom script file -->
    <script src="HOME PAGE/JS\script.js"></script>

    <script>
        var swiper = new Swiper(".myHome", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
         });
    </script>
    



</body>
</html>