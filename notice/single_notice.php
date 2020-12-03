
<?php 
$id =$_GET['id'];
include('../include/connection.php');

$con = connectDB();

$sql    = "SELECT * FROM dwmtec_notice WHERE id = '$id'";
$result = mysqli_query($con,$sql);
$data   =mysqli_fetch_assoc($result);


?>



<?php include('../include/header.php'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-9 mb-3 mt-2">
			<h2 style=" color:#5f5f5f; margin-bottom: 0px;">NOTICE</h2> <hr>
			<h4><?php echo $data['title']; ?></h4>
			<span><?php echo $data['date']; ?></span><br>
			<img src="../admin/<?php echo $data['image']; ?>" width="100%;" alt="">
				
		</div>
		
	</div>
</div>


<?php include("../include/footer.php") ?>
