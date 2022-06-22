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
    <title>DASIA Control Panel | DASIA Hotel Booking | User Management | </title>

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
            <th class="text-center" scope="col">Username</th>
            <th class="text-center" scope="col">Password</th>
            
            <th class="text-center" scope="col">Edit</th>
            <th class="text-center" scope="col">Delete</th>
        </tr>
    </thead>
    <?php

    $get_data = "SELECT * FROM users order by 1 desc";
    $run_data = mysqli_query($con, $get_data);
    $i = 0;
    while ($row = mysqli_fetch_array($run_data)) {
        $sl = ++$i;
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $loggedin = $row['loggedin'];

        echo "

        <tr>
        <td class='text-center'>$id</td>
        <td class='text-center'>$username</td>
        <td class='text-center'>$password</td>
        
        
    
        
        <td class='text-center'>
            <span>
            <a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#editUsersInfo$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

            </span>
            
        </td>
        <td class='text-center'>
            <span>
            
                <a href='#' class='btn btn-danger deleteuser' title='Delete'>
                     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#deleteUsers$id' style='' aria-hidden=''></i>
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

$get_data = "SELECT * FROM users";
$run_data = mysqli_query($con, $get_data);

while ($row = mysqli_fetch_array($run_data)) {
$id = $row['id'];
echo "

<div id='deleteUsers$id' class='modal fade' role='dialog'>
<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>&times;</button>
<h4 class='modal-title text-center'>Are you sure you want to delete?</h4>
</div>
<div class='modal-body'>
<a href='deleteUsers.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
</div>

</div>

</div>
</div>


";
}


?>


<!----edit Data--->

<?php

$get_data = "SELECT * FROM users";
$run_data = mysqli_query($con, $get_data);

while ($row = mysqli_fetch_array($run_data)) {
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $confirm_password = $row['password'];
    
echo "

<div id='editUsersInfo$id' class='modal fade' role='dialog'>
<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
<div class='modal-header'>
     <button type='button' class='close' data-dismiss='modal'>&times;</button>
     <h4 class='modal-title text-center'>Edit Student Data</h4> 
</div>

<div class='modal-body'>
<form action='editUsersInfo.php?id=$id' method='post' enctype='multipart/form-data'>

        
<div class='form-row'>
<div class='form-group col-md-6'>
<label for='firstname'>Username</label>
<input type='text' class='form-control' name='username' placeholder='Enter First Name' value='$username' required>
</div>
<div class='form-group col-md-6'>

</div>
</div>

<div class='form-row'>
<div class='form-group col-md-6'>
<label for='fathername'>Password</label>
<input type='password' class='form-control' name='password' placeholder='Enter First Name' value='$password' required>
</div>
<div class='form-group col-md-6'>

</div>
</div>


<div class='form-group'>
<label for='passConfirm'>Confirm Password</label>
<input type='password' class='form-control' name='confirm_password' placeholder='Password' maxlength='100' value='$confirm_password' required>

    
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