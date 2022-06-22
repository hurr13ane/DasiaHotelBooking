<?php
include('php/config.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $lastDate = $_POST['endDate'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $adultsNo = $_POST['adultsNumber'];
    $kidsNo = $_POST['kidsNumber'];
    $roomsNo = $_POST['roomsNumber'];
	
	
        $update = "UPDATE rezervari SET `nume`='$firstName',`prenume`='$lastName',`start_date`='$startDate',`end_date`='$lastDate',`adulti`='$adultsNo',`copii`='$kidsNo',`camere`='$roomsNo',`tipCamera`='$roomType',`email`='$email' WHERE id=$id";
        $run_update = mysqli_query($con,$update);

        if($run_update){
            header('location:admin.php');
        }else{
            echo '<script> console.log("Cannot insert in table.");</script>';
        }
    
    
    

	
}

?>