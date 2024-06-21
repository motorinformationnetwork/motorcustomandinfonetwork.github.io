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
    <link rel="stylesheet" href="civic/ciphp.css/style.css">
    <!--- boxicon cdn link ----->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://blogfonts.com/css/aWQ9MTUxNTEzJnN1Yj01MTMmYz1mJnR0Zj1Gb3JtdWxhMS1Cb2xkX3dlYl8wLnR0ZiZuPWZvcm11bGExLWRpc3BsYXktYm9sZA/Formula1 Display Bold.ttf" rel="stylesheet" type="text/css"/>
    <title>Remove Bullets</title>
    <style>
        body{
          background-image: url('IMG1/background.png');
          background-repeat: no-repeat;
          background-size: 1420px;
          background-position: 772px 10px;
          overflow-x: hidden;
        }

        @media(max-width:1700px){
            body{
                background-image: url('IMG1/background2.png');
                background-repeat: no-repeat;
                background-size: 1700px;
                background-position: 0px 125px;
                overflow-x: hidden;
            }

       
    }
    </style>
</head>


<body>
    

        <!--- navbar section start --->
        <header class="header">
                <div class="logo">
                <a href="home.php"><img src="IMG1/Project Logo (1).png" alt=""></a>
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


            <div class="customization-container">
                <div class="container">
                    <img id="carBase" src="imgcivic/toyotabase.png" alt="Base Car">
                    <img id="carColor" class="car-part" src="imgcivic/toyotawheel.png" alt="Car Color">
                    <img id="carWheels" class="car-part" src="imgcivic/toyotawheel.png" alt="Car Wheels">
                    <img id="carDecals" class="car-part" src="imgcivic/toyotawheel.png" alt="Car Decals">
                    <!-- Add more parts as needed -->
                </div>
            
            <div class="control">
                <div class="controls">
                    <h2>Customize Your Car</h2>
                        <div class="group">
                            <div class="control-group">
                                <div class="colors">
                                    <label for="color">Color</label>
                                        <div class="grey">
                                            <button onclick="changeColor('imgcivic/toyotabase.png')"><img src="IMG1/th.jpg">Grey</button>
                                        </div>
                                        <div class="blue">
                                            <button onclick="changeColor('imgcivic/toyotablue.png')"><img src="IMG1/neon-blue-color-768x432.png">Neon Blue</button>
                                        </div>
                                        <div class="white">
                                            <button onclick="changeColor('imgcivic/toyotawhite.png')"><img src="IMG1/hc-brand-texture-white-rgb-rgb-1200x1196.png">White</button>
                                        </div>
                                        <div class="brown">
                                            <button onclick="changeColor('imgcivic/toyotabrown.png')"><img src="IMG1/76472d.png">Bright brown</button>
                                        </div>
                                        <div class="silver">
                                            <button onclick="changeColor('imgcivic/toyotagrey.png')"><img src="IMG1/170-169-173.jpg">Metallic silver</button>
                                        </div>
                                        <div class="black">
                                            <button onclick="changeColor('imgcivic/toyotablack.png')"><img src="IMG1/000000.jpg">Black</button>
                                        </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="wheel">
                                    <label for="wheels">Wheels</label>
                                        <div class="default">
                                            <button onclick="changeWheels('imgcivic/toyotadefaultwheel.png')">Default</button>
                                        </div>
                                        <div class="matt">
                                            <button onclick="changeWheels('imgcivic/toyotaevo.png')"><img src="IMG1/EVO_F_1200x-removebg-preview.png"><div class="text">OEPlus (OE+) "EVO" Alloy Wheel (Matte Black)</div></button>
                                        </div>
                                        <div class="gloss">
                                            <button onclick="changeWheels('imgcivic/toyotaruff.png')"><img src="IMG1/aftermarket-wheels-rims-ruff-r4-5-lug-both-gloss-black-face-org-removebg-preview.png"><div class="text">Fast Wheels VYBZ Alloy Wheel (Gloss Black)</div></button>
                                        </div>
                                        <div class="rennes">
                                            <button onclick="changeWheels('imgcivic/toyota-alloywheel.png')"><img src="IMG1/eng_pl_Alloy-Wheels-17-5x108-Carbonado-Rennes-BFP-57414_2-removebg-preview.png"><div class="text">ALLOY WHEELS CARBONADO RENNES BFP</div></button>
                                        </div>
                                        <div class="bc">
                                            <button onclick="changeWheels('imgcivic/toyotarsf5.png')"><img src="IMG1/RS45-F-15-removebg-preview.png"><div class="text">BC Forged RS45 Drag Monoblock Wheels</div></button>
                                        </div>
                                        <div class="rhino">
                                            <button onclick="changeWheels('imgcivic/toyotatruck.png')"><img src="IMG1/baker-truck-wheels-rims-black-rhino-baker-6-lug-matte-black-17x8-5-face-org-png_1b3eb04d-749a-430f-aa40-377dc379bfc0_1200x-removebg-preview.png"><div class="text">BLACK RHINO BAKER (MATTE BLACK)</div></button>
                                        </div>
                                        <div class="lenso">
                                            <button onclick="changeWheels('imgcivic/toyotalenso.png')"><img src="IMG1/F-M0A16856M00MK001-2-scaled-removebg-preview.png"><div class="text">LENSO MAX-ARMURO (SATIN BLACK)</div></button>
                                        </div>
                                        

                                            
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="spoil">
                                    <label for="Decals">Decals</label>
                                    <div class="default">
                                        <button onclick="changeDecals('imgcivic/toyotawheel.png')">None</button>
                                    </div>
                                    <div class="matt">
                                        <button onclick="changeDecals('imgcivic/toyotawheelsponsor.png')"><img src="IMG1/360_F_497327922_24Y9xGp0uEZ6TPW3rDlnO3FRM7ELIwpe-removebg-preview.png"></button>
                                    </div>
                                    <div class="gloss">
                                        <button onclick="changeDecals('imgcivic/toyotawheelniu.png')"><img src="IMG1/Car-Decal-Graphic-Vinyl-Wrap-Vector-Image-of-Modern-Design-Car-Tuning-Sticker-High-Quality-300.png"></button>
                                    </div>
                                    <div class="rennes">
                                        <button onclick="changeDecals('imgcivic/toyotawheelnuu.png')"><img src="IMG1/sport-car-decal-wrap-illustration_153744-86.png"></button>
                                    </div>
                                    <div class="bc">
                                        <button onclick="changeDecals('imgcivic/toyotawheeldecals.png')"><img src="IMG1/sport-car-decal-wrap-illustration_153744-7943.png"></button>
                                    </div>
                                    <div class="rhino">
                                        <button onclick="changeDecals('imgcivic/toyotawheellambo.png')"><img src="IMG1/S5261238ebc1144fdab942b63bbc408748.jpg_640x640Q90.jpg_-removebg-preview.png"></button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                    <!-- Add more controls as needed -->
                </div>
            </div>




<!---custom script file -->
<script src="civic/java/java.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>
