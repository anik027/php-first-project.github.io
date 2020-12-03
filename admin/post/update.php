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
$sql    ="SELECT 
			dwmtec_post.*, dwmtec_catagories.title as categoryTitle
			FROM dwmtec_post 
			JOIN dwmtec_catagories ON dwmtec_post.category_id = dwmtec_catagories.id
			WHERE dwmtec_post.id= '$id'
			";

$result = mysqli_query($con, $sql);
$data 	= mysqli_fetch_assoc($result);

//update data start
$title 		 = $_POST['title'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$date 		 = $_POST['date'];

$updatesql = "UPDATE dwmtec_post SET 
			title 		= '$title',
			description = '$description',
			category_id = '$category_id',
			date  		= '$date'";

if(!empty($_FILES['image']['name'])){

	// upload image 
	$rand = rand(10,1000);
	$image = 'uploads/post/'. $rand. $_FILES['image']['name'];
	$upload ='../uploads/post/'. $rand. $_FILES['image']['name'];
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