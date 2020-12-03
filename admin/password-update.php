<?php
session_start();

if(!isset($_SESSION['userId'])){
	echo "<script language=javascript>document.location.href='dsfgdsgindex.php'</script>";
    die();
}
?>

<?php
$id = $_SESSION['userId'];
include('include/connection.php');
$con =connectDB();
//update data start
$oldpassword 	= $_POST['oldpassword'];
$newpassword 	= $_POST['newpassword'];
$cpassword 		= $_POST['cpassword'];

$sql ="SELECT * FROM dwmtec_user WHERE id = $id";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

if ($oldpassword != $data['password']) {
	$_SESSION['pass-match-error'] = true;
	echo "<script language=javascript>document.location.href='password-recover.php'</script>";
	}else{

	if ($newpassword != $cpassword) {
		$_SESSION['pass-match-error'] = true;
		echo "<script language=javascript>document.location.href='password-recover.php'</script>";
	}else{
		$updatesql = "UPDATE dwmtec_user SET 
			password    = '$newpassword'
			WHERE id = $id
			";
		mysqli_query($con,$updatesql);
		$_SESSION['pass-chg-success'] = true;
		echo "<script language=javascript>document.location.href='index.php'</script>";

	}
}


?>
