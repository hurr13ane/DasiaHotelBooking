<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: login.php");
	exit;
}
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
                
            <div class="container">

<!-- adding alert notification  -->
<?php
if ($added) {
    echo "
    <div class='btn-success' style='padding: 15px; text-align:center;'>
        Your Student Data has been Successfully Added.
    </div><br>
";
}

?>

<hr>
<!-- <a href="logout.php" class="btn btn-danger pull-right"><i class="fa fa-lock"></i> Logout</a> -->

<a class="btn btn-warning" href="admin.php"> <i class="fa fa-plus"></i> Management Reservations </a>
<a class="btn btn-warning" href="editUsers.php"> <i class="fa fa-plus"></i> Management Users </a>
<hr>
<table class="table table-bordered table-striped" id="myTable">
    <thead>
        <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">First Name</th>
            <th class="text-center" scope="col">Last Name</th>
            <th class="text-center" scope="col">Start Date</th>
            <th class="text-center" scope="col">End Date</th>
            <th class="text-center" scope="col">Adults</th>
            <th class="text-center" scope="col">Kids</th>
            <th class="text-center" scope="col">Rooms</th>
            <th class="text-center" scope="col">Rooms Type</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Edit</th>
            <th class="text-center" scope="col">Delete</th>
        </tr>
    </thead>
    <?php

    $get_data = "SELECT * FROM rezervari order by 1 desc";
    $run_data = mysqli_query($con, $get_data);
    $i = 0;
    while ($row = mysqli_fetch_array($run_data)) {
        $sl = ++$i;
        $id = $row['id'];
        $fname = $row['nume'];
        $lname = $row['prenume'];
        $sdate = $row['start_date'];
        $edate = $row['end_date'];
        $adultsNo = $row['adulti'];
        $kidsNo = $row['copii'];
        $roomsNo = $row['camere'];
        $roomType = $row['tipCamera'];
        $email = $row['email'];
        

        echo "

        <tr>
        <td class='text-center'>$id</td>
        <td class='text-center'>$fname</td>
        <td class='text-center'>$lname</td>
        <td class='text-center'>$sdate</td>
        <td class='text-center'>$edate</td>
        <td class='text-center'>$adultsNo</td>
        <td class='text-center'>$kidsNo</td>
        <td class='text-center'>$roomsNo</td>
        <td class='text-center'>$roomType</td>
        <td class='text-center'>$email</td>
    
        
        <td class='text-center'>
            <span>
            <a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#editRezervare$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

            </span>
            
        </td>
        <td class='text-center'>
            <span>
            
                <a href='#' class='btn btn-danger deleteuser' title='Delete'>
                     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#deleteRezervare$id' style='' aria-hidden='false'></i>
                </a>
            </span>
            
        </td>
    </tr>


        ";
    }

    ?>



</table>

</div>



<!------DELETE modal---->

<!-- Modal -->
<?php

$get_data = "SELECT * FROM rezervari";
$run_data = mysqli_query($con, $get_data);

while ($row = mysqli_fetch_array($run_data)) {
$id = $row['id'];
echo "

<div id='deleteRezervare$id' class='modal fade' role='dialog'>
<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>&times;</button>
<h4 class='modal-title text-center'>Are you sure you want to delete?</h4>
</div>
<div class='modal-body'>
<a href='deleteRezervare.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
</div>

</div>

</div>
</div>


";
}


?>


<!----edit Data--->

<?php

$get_data = "SELECT * FROM rezervari";
$run_data = mysqli_query($con, $get_data);

while ($row = mysqli_fetch_array($run_data)) {
    $id = $row['id'];
    $fname = $row['nume'];
    $lname = $row['prenume'];
    $sdate = $row['start_date'];
    $edate = $row['end_date'];
    $adultsNo = $row['adulti'];
    $kidsNo = $row['copii'];
    $roomsNo = $row['camere'];
    $roomType = $row['tipCamera'];
    $email = $row['email'];
    
    echo "

    <div id='editRezervare$id' class='modal fade' role='dialog'>
      <div class='modal-dialog'>
    
        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
                 <button type='button' class='close' data-dismiss='modal'>&times;</button>
                 <h4 class='modal-title text-center'>Edit Student Data</h4> 
          </div>
    
          <div class='modal-body'>
            <form action='editRezervare.php?id=$id' method='post' enctype='multipart/form-data'>
    
                    
            <div class='form-row'>
            <div class='form-group col-md-6'>
            <label for='firstname'>First Name</label>
            <input type='text' class='form-control' name='firstName' placeholder='Enter First Name' value='$fname' required>
            </div>
            <div class='form-group col-md-6'>
            <label for='lastname'>Last Name</label>
            <input type='text' class='form-control' name='lastName' placeholder='Enter Last Name' value='$lname' required>
            </div>
            
            </div>
    
            <div class='form-row'>
            <div class='form-group col-md-6'>
            <label for='startDate'>Start Date</label>
            <input type='date' class='form-control' name='startDate' placeholder='Start Date' value='$sdate' required>
            </div>
            <div class='form-group col-md-6'>
            <label for='endDate'>End Date</label>
            <input type='date' class='form-control' name='endDate' placeholder='End Date' value='$edate' required>
            </div>
            </div>
            
            <div class='form-row'>
            <div class='form-group col-md-6'>
            <label for='email'>Email </label>
            <input type='email' class='form-control' name='email' placeholder='Enter Email id' value='$email' required>
            </div>
            <div class='form-group col-md-6'>
            <label for='inputState'>Room Type</label>
            <select id='inputState' name='roomType' class='form-control' value='$roomType'>
                    <option value='Double_Room'>Double Room</option>
                    <option value='Single_Room'>Single Room</option>
                    <option value='Special_Room'>Special Room</option>
            </select>
            </div>
            </div>
            
    
            <div class='form-group'>
            <label for='adultsNo'>Adults Number/label>
            <input type='text' class='form-control' name='adultsNumber' placeholder='Number of adults'  value='$adultsNo' required>
            </div>
    
            <div class='form-group'>
            <label for='kidsNo'>Kids Number</label>
            <input type='text' class='form-control' name='kidsNumber' placeholder='Number of kids' value='$kidsNo' required>
            </div>
            
            <div class='form-group'>
            <label for='roomsNo'>Rooms Number</label>
            <input type='text' class='form-control' name='roomsNumber'  placeholder='Numbers of rooms' value='$roomsNo' required>
            </div>
                
                 <div class='modal-footer'>
                 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
                 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        ";
}


?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();

});
</script>

            </div>
            
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    
    <!-- Map Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
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