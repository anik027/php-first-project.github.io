<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>



<?php include('../include/header.php'); ?>
<a href="index.php"><button class="btn btn-primary btn-back">Back </button></a>

<div class="admin-wraper p-3" >
	<h2 style="display: inline-block;">Edit your profile</h2>  <hr>
			<form action="update.php?id=<?php echo $_SESSION['userId']; ?>" method="post" >

			 	<div class="form-group d-block">
				    <label for="fname"><b>First Name</b></label>
				    <input type="text" class="form-control" name="fname"  required="" value="<?php echo $data['fname']; ?>"> 				      
				</div>
				<div class="form-group d-block">
				    <label for="lname"><b>Last Name</b></label>
				   <input type="text" name="lname" class="form-control" value="<?php echo $data['lname']; ?>">
				</div>
				<div class="form-group d-block">
				    <label for="username"><b>User Name</b></label>
				   <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
				</div>
				<div class="form-group d-block">
				    <label for="email"><b>Email</b></label>
				   <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
				</div>
				
				
						  		  
			  <button type="submit" name="submit" class="btn btn-primary">submit</button>
		</form>
	

</div>

<?php include("../include/footer.php") ?>
