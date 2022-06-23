<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page

// Include config file
require_once "../php/config.php";
 
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASIA Hotel Videos | Login Page</title>

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <style>
    a:hover{
        color:red;
        font-weight:800px;
        text-decoration:underline;
    }    
    .bs-linebreak {
  
  border-top: 2px solid black;
}
    </style>

    <!-- Header Section Begin -->
    <header class="header-section">
    <div class="container-fluid">
    <div class="inner-header">
            <div class="logo">
                <a href="./index.php"><img src="img/logo1.png" alt=""></a>
            </div>
            
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../videos/videos.php">RPA Videos</a></li>
                    <li><a href="../about-us.php">About</a></li>
                    <li><a href="../rooms.php">Rooms</a></li>
                    
                    <li class=""><a href="../contact.php">Contact</a></li>
                    <li class=""><a href="../adaugRezervari.php">Make a Reservation</a></li>
                    <li class="" id="adminPanel"><li>
                    <?php 
                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            echo '<script> document.getElementById("adminPanel").innerHTML = ``; </script>'; 
                        }
                        else
                        {
                            echo '<script> document.getElementById("adminPanel").innerHTML = `<a style="color:#F9AD81;" class="" href="../admin.php">Admin Panel</a>`; </script>'; 


                        }
                    ?>
                    
                    <li class="login" id="checkLogin"><li>
                    <?php 
                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            echo '<script> document.getElementById("checkLogin").innerHTML = `<a style="color:white;" class="" href="../login.php"><i class="fa fa-lock">_Login</a>`; </script>'; 
                        }
                        else
                        {
                            echo '<script> document.getElementById("checkLogin").innerHTML = `<a href="../logout.php" style="color:red;" class=""><i class="fa fa-lock"></i> Logout</a>`; </script>'; 
                        }
                    ?>

                    
                    
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    </header>
    <!-- Header End -->


    <!-- Contact Section Begin -->
    <section class="login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center my-5"> Formular RPA - Inregistrare rezervare </h4>
                    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" controls="true" width="640" height="480" src="./rpaFormularDASIAHotel.mp4" title="Formular RPA - Inregistrare rezervare" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <h4 class="text-center my-5"><a href="./rpaFormularDASIAHotel.mp4" >Open MP4 in browser from directory.</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bs-linebreak">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center my-5"> Login RPA - Logare in platforma </h4>
                    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" controls="true" width="640" height="480" src="./rpaLoginDASIAHotel.mp4" title="Login RPA - Logare in platforma" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <h4 class="text-center my-5"><a href="./rpaLoginDASIAHotel.mp4" >Open MP4 in browser from directory.</a></h4>
                </div>
            </div>
            
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    
    <!-- Map Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" >
        <?php include "../footerManagement.php"; ?>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/main2.js"></script>
</body>

</html>