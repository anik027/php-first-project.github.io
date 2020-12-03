<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php 

include('../include/connection.php');

$title = $_POST['title'];



$con =connectDB();
$sql ="INSERT INTO dwmtec_catagories(title) 
		VALUES('$title')
		";

$result =mysqli_query($con,$sql);
if(!$result){
	header('location:create.php');
}else{
	header('location:index.php');
}


?>