<?php
    include('db.php');
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
    <link rel="stylesheet" href="CSS\style.css">
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
                    <img src="IMG/Project Logo (1).png" alt="">
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
                    <a href="http://localhost/login/Login.php" href="#" data-text="Login / Register"><button class="addBtn"><i class='bx bxs-user-circle'></i>Login / Register</button></a>
                    <i class='bx bx-menu-alt-left' id="menuBtn"></i>
                </div>
            </nav>    
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
                                <img src="IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt="">
                            </div>

                            <div class="col-2">
                                <h4>Welcome</h4>
                                <h1>best way to find <br> your <span>dream</span> car</h1>
                                

                                
                            </div>
                        </div>
                        
                        <div class="swiper-slide slide slide-two">
                            <div class="col-1">
                                <img src="IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt="">
                            </div>
                            
                            <div class="col-2">
                                <h4>Welcome</h4>
                                <h1>best way to find <br> your <span>dream</span> car</h1>
                            </div>    
        
                        </div>

                        <div class="swiper-slide slide slide-three">
                            <div class="col-1">
                                <img src="IMG/home/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt="">
                            </div>
                            
                            <div class="col-2">
                                <h4>Welcome</h4>
                                <h1>best way to find <br> your <span>dream</span> car</h1>
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
                    <img src="IMG/WhatsApp Image 2024-04-25 at 17.41.15.png">
                </div>

                <div class="button">
                    <button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button>
                </div>
            

                <div class="background-2">
                    <img src="IMG/PORCHE.png">
                </div>

                <div class="button-2">
                    <button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button>
                </div>


                <div class="background-3">
                    <img src="IMG/BUGATTI.png">
                </div>

                <div class="button-3">
                    <button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button>
                </div>

                <div class="background-4">
                    <img src="IMG/aven_ultimae_s_02.png">
                </div>

                <div class="button-4">
                    <button type="submit" class="enter"><i class='bx bx-right-arrow-alt'></i>ENTER</button>
                </div>

        </div>


        


    <!--- swiper java link--->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!---custom script file -->
    <script src="JS\script.js"></script>
    



</body>
</html>