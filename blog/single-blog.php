
<?php 
$id =$_GET['id'];
include('../include/connection.php');

$con = connectDB();

$sql    = "SELECT 
			dwmtec_post.*, dwmtec_catagories.title as categoryTitle
			FROM dwmtec_post 
			JOIN dwmtec_catagories ON dwmtec_post.category_id = dwmtec_catagories.id
			WHERE dwmtec_post.id= '$id'
			";

$result = mysqli_query($con,$sql);
$data   =mysqli_fetch_assoc($result);


?>



<?php include('../include/header.php'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-2"></div>
		<div class="col-md-8 mb-3 mt-2 ">
			<h2 style=" color:#5f5f5f; margin-bottom: 0px;">POST</h2> <hr>
			<h2>
				<?php echo $data['title']; ?>
			</h2>
			<h6>
				Category : <?php echo $data['categoryTitle']; ?>
			</h6>
			<img class="mb-3" src="../admin/<?php echo $data['image']; ?>" width="100%;" style="height: auto;">
			<p style="text-align: justify; padding-right:30px">
				<?php echo $data['description']; ?>	
			</p>
			<span>
				<?php echo $data['date']; ?>	
			</span><br>	
		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<?php include("../include/footer.php") ?>
