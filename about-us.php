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
    <title>DASIA Hotel Booking | About Us</title>

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

    <!-- Search Filter Section End -->

    <!-- About Us Section Begin --> 
    <section class="about-us spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-left">
                        <div class="section-title">
                            <span>Make new memories</span>
                            <h2>A wonderful holiday in a<br />wonderful place.</h2>
                        </div>
                        <p class="second-text">Are you looking to book a place at a hotel that meets your needs regardless of age, comfort and mood? Come to us to delight
                             you with dreamy views, in one of the most beautiful hotels in the country. Here, you will delight your eyes with a specific hotel in Banat in which dream views will be indispensable. </p>
                        <p>It is specific from the oldest to the youngest, trying to please everyone. 
                            Delight your eyes, your senses and your tastes with our dishes, and our rooms will be comfortable for any guest who crosses our threshold.</p>
                            <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img second-img">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img third-img">
                                <img src="img/about/about-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img">
                                <img src="img/about/about-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Milestone Counter Section Begin -->
    <section class="milestone-counter spad set-bg" data-setbg="img/about/milestone-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">15</span>
                        </div>
                        <div class="mc-text">
                            <h3>Luxury Suites</h3>
                            <p>From $499</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">20</span>
                            <strong>K</strong>
                        </div>
                        <div class="mc-text">
                            <h3>Happy Clients</h3>
                            <p>all year long</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">365</span>
                        </div>
                        <div class="mc-text">
                            <h3>Days/ Year</h3>
                            <p>From $499</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mc-item">
                        <div class="mc-num">
                            <span class="counter">24</span>
                            <strong>/7</strong>
                        </div>
                        <div class="mc-text">
                            <h3>Available Services</h3>
                            <p>For our clients happines</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Milestone Counter Section End -->

    <!-- Award Section Begin -->
    <section class="award-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Awards</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2018</h5>
                        <h4>Best Hotel in Romania</h4>
                        <span>Elite Hotel award</span>
                        <p>Given the exceptional results and the growing number of tourists from year to year, 
                            Hotel DASIA impresses with its unique charms.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2019</h5>
                        <h4>Best Services</h4>
                        <span>Elite Hotel award</span>
                        <p>Offering quality services to current and new customers every time, 
                            the DASIA hotel is recognized with the best customer feedback for the services offered.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2019</h5>
                        <h4>Best Hotel Booking</h4>
                        <span>Elite Hotel award</span>
                        <p>The DASIA hotel booking system is easy to use and fast, offering the chance to all travelers to 
                            book their stays easily and quickly. </p>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Award Section End -->

    <!-- Call To Action Begin -->
    <section class="callto-section">
        <div class="container">
            <div class="callto-text">
                <h2>Book your stay with us now!</h2>
            </div>
            <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>        
        </div>
    </section>
    <!-- Call To Action End  -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" > 
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