<?php
session_start();

if(!isset($_SESSION['userId'])){
	echo "<script language=javascript>document.location.href='login.php'</script>";
    die();
}
?>

<?php

$id = $_SESSION['userId'];
include('../include/connection.php');
$con =connectDB();
//update data start
$fname 		= $_POST['fname'];
$lname  	= $_POST['lname'];
$username   = $_POST['username'];
$email  	= $_POST['email'];

$updatesql = "UPDATE dwmtec_user SET  
			fname    = '$fname',
			lname 	 = '$lname',
			username = '$username',
			email 	 = '$email'
			WHERE id='$id'
			";

mysqli_query($con,$updatesql);
echo "<script language=javascript>document.location.href='index.php'</script>";
?>
