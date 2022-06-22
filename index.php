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
    <title>DASIA Hotel Booking | Home Page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
    <section class="hero-area set-bg" data-setbg="img/hero-bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>A place you belong to</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->


                            <br>
                            <br>
    <section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>Make new memories</span>
                            <h2>A wonderful holiday in a<br /> wonderful place.</h2>
                        </div>
                        <p>Are you looking to book a place at a hotel that meets your needs regardless of age, comfort and mood? Come to us to delight you with dreamy views, in one of the most beautiful hotels in the country. Here, you will delight your eyes with a specific hotel in Banat in which dream views will be indispensable. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-right">
                        <p>It is specific from the oldest to the youngest, trying to please everyone. Delight your eyes, your senses and your tastes with our dishes, and our rooms will be comfortable for any guest who crosses our threshold.</p>
                        <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/faci-y1.png">
                        <div class="fi-title">
                            <h2>Luxury Suite Room</h2>
                            <p>From $399</p>
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>High Wi-fii</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>AC</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Pool</p>
                            </div>
                        </div>
                        <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="img/faci-x1.png">
                        <div class="fi-title">
                            <h2>Infinity Pool</h2>
                            <p>For all our guests</p>
                        </div>
                        <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Feedback from our clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            05 / 06 / 2022
                        </div>
                        <h4>I love the hotel's services!</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>
                            Our little stay at this hotel in Timisoara was a dream. The services of the hotel are incomparable, everything was perfect.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/author-1.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>JOHN SMITH <span>LONDON</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            07 / 06 / 2022
                        </div>
                        <h4>I will come back to this experience!</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>My experience at this hotel was a dream come true. I felt treated like royalty, and the food was delicious. Of course I'll go here again.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/author-2.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Sylvie Delacroix <span>France</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Video Section Begin -->
    <div class="video-section">
        <div class="video-bg set-bg" data-setbg="img/video-bg.jpg"></div>
        <div class="container">
            <div class="video-text set-bg" data-setbg="img/video-inside-bg.png">
                <a href="https://www.youtube.com/watch?v=kJtV7bwBsmU" class="pop-up"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>“Customers are happy with  <br />what we offer!</h2>
                        </div>
                        <p>Every time we had new clients, we received them with enthusiasm, wanting to treat them properly. We were there to listen to their 
                            suggestions and come to their aid. Give yourself the chance to have an unforgettable stay in our hotel in Romania. </p>
                            <a href="adaugRezervari.php" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->

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