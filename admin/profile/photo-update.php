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
//collect data for delete image
$con    = connectDB();
$sql 	="SELECT * FROM dwmtec_user WHERE id='$id'";
$result = mysqli_query($con, $sql);
$data 	= mysqli_fetch_assoc($result);

//update data start
if(!empty($_FILES['image']['name'])){

	// upload image 
	$rand = rand(10,1000);
	$image = 'uploads/profile/'. $rand. $_FILES['image']['name'];
	$upload ='../uploads/profile/'. $rand. $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$upload);

$updatesql ="UPDATE dwmtec_user SET
			image ='$image'
			";

	//delete old image
	if(!empty($data['image']) && file_exists('../'.$data['image'])){
		unlink('../'. $data['image']);
	}
}

$updatesql .="WHERE id = '$id'";

mysqli_query($con,$updatesql);
echo "<script language=javascript>document.location.href='index.php'</script>";
?>