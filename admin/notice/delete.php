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

$sql    = "SELECT * FROM dwmtec_notice WHERE id='$id'";
$result = mysqli_query($con,$sql);
$data   = mysqli_fetch_assoc($result);
$image_location ='../'. $data['image'];

if(file_exists($image_location)){
	unlink($image_location);
}

$deletesql = "DELETE FROM dwmtec_notice WHere id= '$id'";
mysqli_query($con,$deletesql);
header('location:index.php');


?>