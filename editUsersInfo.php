<?php
include('php/config.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$param_password = password_hash($password, PASSWORD_DEFAULT);
        $update = "UPDATE users SET `username`='$username',`password`='$param_password' WHERE id=$id";
        $run_update = mysqli_query($con,$update);

        if($run_update){
            header('location:editUsers.php');
        }else{
            echo '<script> console.log("Cannot insert in table.");</script>';
        } 
    
    
    

	
}

?>