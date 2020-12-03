
<?php 
$url=("http://localhost/dwmtec/admin/"); 

?>
<?php 
$id = $_SESSION['userId'];
include('../include/connection.php');
$con =connectDB();
$sql = "SELECT * FROM dwmtec_user WHERE id =$id";
$result =mysqli_query($con,$sql);
$data =mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DWMTEC</title>
	<link rel="stylesheet" href="<?php echo $url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/responsive.css">
</head>
<body>
	<header>
		<div class="fuild-wraper" style="background: #035762;">
			<div class="container">
				<div class=" clearfix">
					<div class="admin-header text-center p-2">
						<div class="profile" style="display: inline-block; float: left;">
							<img src="<?php echo $url; ?><?php echo $data['image']; ?>"

							 style="width:50px;height:50px;border-radius: 100%;border: 3px solid white;">
								<a id="profileHov" href="<?php echo $url; ?>profile">
									<h3  style="display: inline-block;margin-left: 10px;color:#ffeb3b; vertical-align: middle;font-size: 18px;">
								
									<?php 
										echo  $data['username'];

									 ?>
								 	
								 	</h3>
								</a>
						</div>
						<h2 style="color:white; display: inline-block;vertical-align: middle;font-size: 40px;">Admin Panel</h2>
						<div class="logout float-right d-inline-block" style="vertical-align: middle;margin-top: 15px;">
							<a href="<?php echo $url; ?>logout.php"><button class="btn btn-warning btn-sm" style="color: #795548; font-weight: 600;">Logout</button></a>
						</div>
					</div>
				</div>


				
		</div>
	</div>
	<div class="container">
		<div class="row clearfix" >
			<div class="col-md-12 text-right mt-2">
			    <a href="<?php echo $url; ?>../index.php" target="blank"><button class="btn btn-secondary mb-2">Visit site</button></a>
			</div>
		</div>
	</div>
	<div class="side-manu">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-3 mb-5" >
					<div class="list-group">
						<button type="button" class="list-group-item list-group-item-action active">
						 Side menu
						</button>
						<a href="<?php echo $url; ?>profile"><button type="button" class="list-group-item 
						    list-group-item-action" disabled>Profile</button ></a>
						<a href="<?php echo $url; ?>password-recover.php"><button type="button" class="list-group-item 
						    list-group-item-action" disabled>Change Password</button ></a>
						<a href="<?php echo $url; ?>profile/profile-photo.php"><button type="button" class="list-group-item 
						    list-group-item-action" disabled>Change Profile Photo </button ></a>
						<a href="<?php echo $url; ?>Notice"><button type="button" class="list-group-item 
							list-group-item-action" disabled>Notice</button ></a>
						<a href="<?php echo $url; ?>post-category/index.php"><button type="button" class="list-group-item 
							list-group-item-action" disabled>Blog categories</button></a>
						<a href="<?php echo $url; ?>post/index.php"><button type="button" class="list-group-item 
							list-group-item-action" disabled>Blog Post</button></a>
					</div>
				</div>
				<div class="col-md-9">
					
