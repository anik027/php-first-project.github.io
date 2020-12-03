<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php
$url = ("http://localhost/dwmtec/admin/");
$id = $_GET['id'];
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
include('../include/connection.php');

$con = connectDB();

$sql    = "SELECT * FROM dwmtec_post WHERE id='$id'";
$result = mysqli_query($con,$sql);
$data   = mysqli_fetch_assoc($result);
$image_location ='../'. $data['image'];

if(file_exists($image_location)){
	unlink($image_location);
}

$deletesql = "DELETE FROM dwmtec_post WHere id= '$id'";
mysqli_query($con,$deletesql);
header('location:index.php');

?>