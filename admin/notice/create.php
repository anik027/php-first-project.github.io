<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php include('../include/header.php'); ?>

<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Add a new notice <hr></h2>
			<form action="store.php" method="post" enctype="multipart/form-data">
			 	<div class="form-group d-block">
				    <label for="title"><b>Title</b></label>
				    <input type="text" class="form-control" name="title"  required="" placeholder="title"> 				      
				</div>
				<div class="form-group  d-block">
				    <label for="image"><b>Image</b></label>
				    <input type="file"  class="form-control"  name="image">   
				</div>
				<div class="form-group  d-block">
				    <label for="date"><b>Date</b></label>
				    <input type="date"  class="form-control" required="" name="date">   
				</div>	
						  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
