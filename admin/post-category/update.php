<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php
include('../include/connection.php');

$id     = $_GET['id'];
$title  = $_POST['title'];
$con    = connectDB();

$sql = "UPDATE dwmtec_catagories SET title = '$title' WHERE id = $id";
$result =mysqli_query($con, $sql);
if($result){
	header("location:index.php");
}
?>