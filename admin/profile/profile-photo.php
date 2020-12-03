<?php
session_start();

if(!isset($_SESSION['userId'])){
	   echo "<script language=javascript>document.location.href='login.php'</script>";
    die();
}
?>

<?php include('../include/header.php'); ?>

<a href="../index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Profile update <hr></h2>
			<form action="photo-update.php" method="post" enctype="multipart/form-data">	
				<div class="form-group  d-block">
				    <label for="image"><b>Image</b></label>
				    <input type="file"  class="form-control"  name="image">   
				</div>
			  <button type="submit" name="submit" class="btn btn-primary">upload</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
