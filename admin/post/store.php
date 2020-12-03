<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php 

$rand = rand(10,1000);
$image = 'uploads/post/'. $rand. $_FILES['image']['name'];
$upload ='../uploads/post/'. $rand. $_FILES['image']['name'];
$row=move_uploaded_file($_FILES['image']['tmp_name'],$upload);

include('../include/connection.php');


$title 		 = $_POST['title'];
$description = $_POST['description'];
$date 		 = $_POST['date'];
$category_id = $_POST['category_id'];


$con =connectDB();
$sql ="INSERT INTO dwmtec_post(title,description,image,date,category_id) VALUES('$title','$description','$image','$date','$category_id')";
$result =mysqli_query($con,$sql);
if (!$result) {
	header('location:create.php');
}else{
	header('location:index.php');
}


?>