<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>

<?php 

$rand = rand(10,1000);
$image = 'uploads/notices/'. $rand. $_FILES['image']['name'];
$upload ='../uploads/notices/'. $rand. $_FILES['image']['name'];
$row=move_uploaded_file($_FILES['image']['tmp_name'],$upload);

include('../include/connection.php');


$title = $_POST['title'];
$date = $_POST['date'];


$con =connectDB();
$sql ="INSERT INTO dwmtec_notice(title,image,date) VALUES('$title','$image','$date')";
$result =mysqli_query($con,$sql);
if(!$result){
	header('location:create.php');
}else{
	header('location:index.php');
}


?>