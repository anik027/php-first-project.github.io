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
$sql ="SELECT * FROM dwmtec_notice WHERE id='$id'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>




<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Edit your notice <hr></h2>
			<form action="update.php?id=<?=$data['id']; ?>" method="post" enctype="multipart/form-data">
			 	<div class="form-group d-block">
				    <label for="title"><b>Title</b></label>
				    <input type="text" class="form-control" name="title"  required="" value="<?= $data['title']; ?>"> 				      
				</div>
				<div class="form-group  d-block">
				    <label for="image"><b>Image</b></label>
				    <input type="file"  class="form-control"  name="image">   
				</div>
				<img src="../<?=$data['image']; ?>" width="200px" alt="">
				<div class="form-group  d-block">
				    <label for="date"><b>Date</b></label>
				    <input type="date"  class="form-control" required="" value="<?=$data['date']; ?>" name="date">   
				</div>	
						  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
