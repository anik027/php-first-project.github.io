<?php
session_start();

if(!isset($_SESSION['userId'])){
		echo "<script language=javascript>document.location.href='dsfgdsgindex.php'</script>";
    die();
}
?>

<?php include('include/header.php'); ?>
<a href="index.php"><button class="btn btn-primary btn-back">Back </button></a>

<div class="admin-wraper p-3" >
	<h2 style="display: inline-block;">Change Password</h2>  <hr>
			<?php if(isset($_SESSION['pass-match-error'])) { ?>
               <div class="alert alert-danger" role="alert">
                Sorry! Password does not match
            </div>
            <?php } ?>
			<form action="password-update.php" method="post" >
			 	<div class="form-group d-block">
				    <label for="possword"><b>Old Password</b></label>
				    <input type="password" class="form-control" name="oldpassword"  required=""> 				      
				</div>
				<div class="form-group d-block">
				    <label for="possword"><b>New Password</b></label>
				    <input type="password" class="form-control" name="newpassword"  required=""> 				      
				</div>
				<div class="form-group d-block">
				    <label for="possword"><b>Confirm Password</b></label>
				    <input type="password" class="form-control" name="cpassword"  required=""> 				      
				</div>	  		  
			  <button type="submit" name="submit" class="btn btn-primary">update</button>
		</form>

</div>

<?php include("include/footer.php") ?>
<?php 
unset($_SESSION['pass-match-error']);
 ?>