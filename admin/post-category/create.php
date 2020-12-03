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
		<h2>Add a category <hr></h2>
			<form action="store.php" method="post">
			 	<div class="form-group d-block">
				    <label for="title"><b>Title</b></label>
				    <input type="text" class="form-control" name="title"  required="" placeholder="title"> 				      
		  		</div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
