<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php include('include/header.php'); ?>
<div class="admin-wraper p-3">
	<div class="admin-home">
		<h3 class="text-center">WELCOME TO ADMIN PANEL</h3>
		<?php if(isset($_SESSION['pass-chg-success'])) { ?>
               <div class="alert alert-success" role="alert">
                Your password change
            </div>
            <?php } ?>
		<span style="font-size: 20px; font-weight: bold;">Customize youe site here.</span><br>
		<br>
		<ul>
			<li><b>You can create/update notice </b></li>
			<li><b>you can create/update post</b></li>
			<li><b>Can see your profile</b></li>
			<li><b>Can delete notice/post</b></li>
		</ul>
	</div>
</div>
<?php include("include/footer.php") ?>
<?php unset($_SESSION['pass-chg-success']); ?>