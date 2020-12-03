<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php include('../include/header.php'); ?>
<?php 
$id = $_GET['id'];
$sql1    ="SELECT 
			dwmtec_post.*, dwmtec_catagories.title as categoryTitle
			FROM dwmtec_post 
			JOIN dwmtec_catagories ON dwmtec_post.category_id = dwmtec_catagories.id
			WHERE dwmtec_post.id= '$id'";


$result  = mysqli_query($con, $sql1);
$row     = mysqli_fetch_assoc($result);

?>



<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Post<a href="#"><button class="btn btn-success btn-sm float-right">post view</button></a><hr></h2>
		<table class="table">
			<tr>
				<th><b>Title </b></th></th>
				<td><b>: </b><?php echo $row['title']; ?></td>
			</tr>
			<tr>
				<th><b>Description</b></th>
				<td><b>: </b><?php echo $row['description']; ?></td>
			</tr>
			<tr>
				<th><b>Category</b></th>
				<td><b>: </b><?php echo $row['categoryTitle']; ?></td>
			</tr>
			<tr>
				<th><b>Image</b> <B style="float: right;">:</B></th>
				<td><img src="<?php echo $url; ?><?php echo $row['image']; ?>" width="500px"></td>
			</tr>
			<tr>
				<th><b>Date</b></th>
				<td><b>: </b><?php echo $row['date']; ?></td>
			</tr>
		</table>
</div>

<?php include("../include/footer.php") ?>
