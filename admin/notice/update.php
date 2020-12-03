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
//collect data for delete image
$con    = connectDB();
$sql 	="SELECT * FROM dwmtec_notice WHERE id='$id'";
$result = mysqli_query($con, $sql);
$data 	= mysqli_fetch_assoc($result);

//update data start
$title = $_POST['title'];
$date  = $_POST['date'];

$updatesql = "UPDATE dwmtec_notice SET 
			title = '$title',
			date  = '$date'";

if(!empty($_FILES['image']['name'])){

	// upload image 
	$rand = rand(10,1000);
	$image = 'uploads/notices/'. $rand. $_FILES['image']['name'];
	$upload ='../uploads/notices/'. $rand. $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$upload);

$updatesql .=", image ='$image'";
			

	//delete old image
	if(!empty($data['image']) && file_exists('../'.$data['image'])){
		unlink('../'. $data['image']);
	}
}

$updatesql .="WHERE id = '$id'";

mysqli_query($con,$updatesql);
header('location:index.php');
?>