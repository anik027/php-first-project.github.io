<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();

}	
?>

<?php include('../include/header.php'); ?>
<a href="../index.php"><button class="btn btn-primary btn-back">Back </button></a>

<div class="admin-wraper p-3" >
	<h2 style="display: inline-block;">Profile setting</h2> <a href="edit.php" class="float-right mt-2"><button class="btn btn-info btn-sm ">Edit</button></a> <hr>
	<div class="row clearfix">
		<div class="col-md-8">
			<table>
		<tr>
			<th>Fist Name </th>
			<td>:</td>
			<td><?php echo $data['fname']; ?></td>
		</tr>
		<tr>
			<th>Last Name </th>
			<td>:</td> 
			<td><?php echo $data['lname']; ?></td>
		</tr>
		<tr>
			<th>User Name </th>
			<td>:</td> 
			<td><?php echo $data['username']; ?></td>
		</tr>
		<tr>
			<th>Email </th>
			<td>:</td>
			<td><?php echo $data['email']; ?></td>
		</tr>
	</table>
		</div>
		<div class="col-md-4">
			<img src="<?php echo '../'.$data['image']; ?>" width="100%">
		</div>
	</div>

</div>

<?php include("../include/footer.php") ?>
