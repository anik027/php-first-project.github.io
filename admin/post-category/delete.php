<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php

$id = $_GET['id'];

include('../include/connection.php');

$con = connectDB();

$deletesql = "DELETE FROM dwmtec_catagories WHere id= '$id'";
mysqli_query($con,$deletesql);
header('location:index.php');


?>