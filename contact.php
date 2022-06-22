<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page

// database connection
include('php/config.php');

$added = false;



?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASIA Hotel Booking | Contact</title>

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <?php include "./menuManagement.php"; ?>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/about_bg1.jpg">
    </div>
    <!-- Hero Area Section End -->


    <!-- Contact Section Begin -->

                            
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title">
                            <span>Reserve a wonderful holiday</span>
                            <h2>Your reliable hotel booking partner</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form action="post.php" class="contact-form" id="emailForm" name="emailForm" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="visitor_name" name="visitor_name" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" id="visitor_email" name="visitor_email" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" id="email_title" name="email_title" placeholder="Subject" >
                            </div>
                            <div class="col-lg-12">
                                <textarea id="visitor_msg" name="visitor_msg" placeholder="Message" required></textarea>
                            </div>
 
                        <button type="submit" name="SubmitBtn" id="SubmitBtn" value="Submit">Send Message</button>
                        
                        </div 
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <img src="img/contact-logo1.png" alt="">
                        <ul>
                            <li>300223 Vasile Parvan Boulevard no. 5, <br />Timișoara, RO</li>
                            <li>+40 756 - 542 - 879</li>
                            <li>example@gmail.com</li>
                            <li>Everyday: 06:00 - 22:00</li>
                        </ul>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2006539772965!2d21.227130532700066!3d45.74712315571783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d84610655bf%3A0xfd169ff24d29f192!2sUniversitatea%20de%20Vest%20din%20Timi%C8%99oara!5e0!3m2!1sro!2sro!4v1654614049231!5m2!1sro!2sro"
            height="910" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" id="footerManagement">
        <?php include "./footerManagement.php"; ?>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
</body>

</html>