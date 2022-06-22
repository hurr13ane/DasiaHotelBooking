<?php

include('php/config.php');
$id = $_GET['id'];
$delete = "DELETE FROM rezervari WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:admin.php');
}else{
	echo "Do not Delete";
}


?>