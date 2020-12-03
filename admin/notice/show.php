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
$row = mysqli_fetch_assoc($result);
?>



<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Notice <hr></h2>
		<div class="notice-title">
			<a href="../../notice/single_notice.php?id=<?= $row['id']; ?>"><h4><?php echo $row['title']; ?></h4></a>
		</div>
		<div class="notice-date mb-2">
			<span  style="color:#595656;"><?php echo $row['date']; ?></span>
		</div>
		<div class="notice-image">
			<img src="../<?php echo $row['image']; ?>" width="100%">
		</div>
</div>

<?php include("../include/footer.php") ?>
