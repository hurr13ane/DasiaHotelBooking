<?php 
session_start();

include('php/config.php');


if (isset($_POST['submitRez'])) {
	$firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $lastDate = $_POST['endDate'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $adultsNo = $_POST['adultsNumber'];
    $kidsNo = $_POST['kidsNumber'];
    $roomsNo = $_POST['roomsNumber'];

	$insert_data = "insert into `rezervari` (`nume`, `prenume`, `start_date`, `end_date`, `adulti`, `copii`, `camere`, `tipCamera`, `email`) VALUES ('$firstName','$lastName','$startDate','$lastDate','$adultsNo','$kidsNo','$roomsNo','$roomType','$email')";
	$run_data = mysqli_query($con, $insert_data);

	if ($run_data) {
		$added = true;
        header('location:admin.php');
	} else {
		echo '<script>alert("Cannot insert into table");</script>';

	}

}
else{
    echo '<script>console.log("Cannot insert into table");</script>';
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASIA Hotel Booking | Login Page</title>

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
    <section class="login-section spad">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" class="check-form">
                        <h4>Reserve an holiday</h4>

                                <input type="text" name="firstName" class="form-control" placeholder="Your first name" required="required" autocomplete="off"/>    
                        <br>
                        <br>
                        <input type="text" name="lastName" class="form-control" placeholder="Your last name" required="required" autocomplete="off"/>    
                        <br>
                        <br>
                        <input name="email" type="email" class="form-control" placeholder="Your email" required="required" autocomplete="off"/>    
                        <br>
                        <br>
                        <div class="datepicker">
                            <p>From</p>
                            <input id="startDate" name="startDate" type="date" class="form-control" placeholder="" required="required" autocomplete="off">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input id="endDate" name="endDate" type="date" class="form-control" placeholder="" required="required" autocomplete="off">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input id="adultsInput" name="adultsNumber" type="text" placeholder="1" autocomplete="off"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input id="kidsInput" name="kidsNumber" type="text" placeholder="0" autocomplete="off"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input id="roomsInput" name="roomsNumber" type="text" placeholder="1" autocomplete="off"></div>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Room</p>
                            <select id="selectRoomType" name="roomType" class="suit-select">
                                
                                <option value="Double_Room">Double Room</option>
                                <option value="Single_Room">Single Room</option>
                                <option value="Special_Room">Special Room</option>
                            </select>
                        </div>
                        
                        <button name="submitRez" type="submit">Go</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    
    <!-- Map Section End -->

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

