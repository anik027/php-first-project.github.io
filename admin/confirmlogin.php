<?php
session_start();
include('include/connection.php');
$con = connectDB();

$email 		= $_POST['email'];
$password   = $_POST['password'];


$sql = "SELECT * FROM dwmtec_user WHERE email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);

 $rowcount = mysqli_num_rows($result);
 if($rowcount == 1){
 		$data= mysqli_fetch_assoc($result);
		$_SESSION['userId']		=$data['id'];
		$_SESSION['fname']		=$data['fname'];
		$_SESSION['lname']		=$data['lname'];
		$_SESSION['username']	=$data['username'];
		$_SESSION['email']		=$data['email'];
		$_SESSION['password']	=$data['password'];
		$_SESSION['image']		=$data['image'];

	echo "<script language=javascript>document.location.href='index.php'</script>";
 	
 }
else{
    session_start();
    $_SESSION['error'] = true;
    header("location:login.php");
}

?>