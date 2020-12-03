
<?php $url = ("http://localhost/dwmtec/"); ?>
<?php 

include('../include/connection.php');

$con = connectDB();

$sql    = "SELECT COUNT(id) as total FROM dwmtec_post";
$result = mysqli_query($con,$sql);
$data   = mysqli_fetch_assoc($result);

$skip = 0;
$take = 8;
$page =1;
$totalpage = ceil($data['total'] / $take);

if (isset($_GET['page'])) {
	$page =$_GET['page'];
	$skip = ($page - 1) * $take;
}

$sql = "SELECT 
		dwmtec_post.*, dwmtec_catagories.title as categoryTitle
		FROM dwmtec_post 
		JOIN dwmtec_catagories ON dwmtec_post.category_id = dwmtec_catagories.id
		LIMIT $skip, $take
		"; 
$result = mysqli_query($con,$sql);

$categorySql = "SELECT * FROM dwmtec_catagories";
$categoryResult = mysqli_query($con,$categorySql);


?>



<?php include('../include/header.php'); ?>
<div class="container">
	<div class="blog-title">
		<h1 style="border-bottom: 2px solid #555454;display:block;line-height: 2; color:#555454;">Blog</h1>
	</div>
	<div class="row clearfix">
		<div class="col-md-8">
			<div class="all-blog-wraper" style="box-shadow:0px 0px 10px 2px #5d5d5d;">

					<?php while($row = mysqli_fetch_assoc($result)){ ?>



				<div class="single-blog p-2 pl-3">
					<div class="title">
						<a href="<?php echo $url; ?>blog/single-blog.php?id=<?= $row['id']; ?>"><h2 style="font-size: 24px"><?php echo $row['title']; ?></h2></a>
					</div>
					<div class="row clearfix">
						<div class="col-md-3" style="height: 100px;">
							<a href="<?php echo $url; ?>blog/single-blog.php?id=<?= $row['id']; ?>"><img src="../admin/<?php echo $row['image']; ?>" width="100%" style="height: 100%"></a>
						</div>
						<div class="col-md-9 pl-0" >
							<div class="description">
								<p style="font-size: 15px; line-height: 2; margin-bottom: 0px;" ><?php echo substr($row['description'],0 ,400); ?></p><a href="<?php echo $url; ?>blog/single-blog.php?id=<?= $row['id']; ?>" style="float: right; "><button class="btn btn-defaults btn-sm" style="color:#04969b;">Read more>></button></a>
							</div>
						</div>
					</div>
					<div class="date mt-2 mb-2">
						<span style="font-size: 15px"><?php echo $row['date']; ?></span>
					</div>
				</div>

				<?php } ?>
				

			</div>

			<!--------- PAGE NUMBER BAR ---------->

			<div class="mt-3 mb-2 text-center">
				Showing page <?php echo $page ?> of <?php echo $totalpage ?>
			</div>
			<div class="row clearfix">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-2">
				<?php if ($page > 1) { ?>
					<a class="float-right" style="font-size: 18px" href='<?php echo $url ?>blog/blog.php?page=<?php echo $page - 1 ?>'>Previous</a>
				<?php } ?>
				
			</div>
			<div class="col-md-4 text-center">
				<div class="btn-toolbar d-inline-block">
					  <div class="btn-group mr-2">
					  	<?php for ($i=1; $i <= $totalpage; $i++) { ?>
					    <a href="<?php echo $url ?>blog/blog.php?page=<?php echo $i ?>"><button type="button" style="border-radius: inherit;" class="btn btn-secondary"><?php echo $i ?></button> </a>	
					    <?php } ?>	    
					  </div>								
				</div>
			</div>
			<div class="col-md-2">
				<?php if ($totalpage > $page) { ?>
					<a style="font-size: 18px" href="<?php echo $url ?>blog/blog.php?page=<?php echo $page + 1 ?>">Next</a>
				<?php } ?>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>

		</div>
		<div class="col-md-4 mt-2 mb-2" >
			<div class="blog-categories" style="box-shadow:0px 0px 10px 2px #5d5d5d;padding: 15px;">
				<div class="title">
					<h4>Categories</h4>
				</div>
				<div class="categories">
					<ul>
						<?php while ($categoryRow=mysqli_fetch_assoc($categoryResult)) { ?>
							<li><a href=""><?php echo $categoryRow['title']; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>




</div>


<?php include("../include/footer.php") ?>
