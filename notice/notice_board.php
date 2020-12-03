
<?php $url = ("http://localhost/dwmtec/"); ?>
<?php 

include('../include/connection.php');

$con = connectDB();

$sql    = "SELECT COUNT(id) as total FROM dwmtec_notice";
$result = mysqli_query($con,$sql);
$data   = mysqli_fetch_assoc($result);

$skip = 0;
$take = 10;
$page =1;
$totalpage = ceil($data['total'] / $take);

if (isset($_GET['page'])) {
	$page =$_GET['page'];
	$skip = ($page - 1) * $take;
}

$sql = "SELECT * FROM dwmtec_notice
		ORDER BY id DESC 
		LIMIT $skip, $take

"; 
$result = mysqli_query($con,$sql);

?>



<?php include('../include/header.php'); ?>

<div class="container" style=" box-shadow: 0 0 6px 3px #747474;
	border-radius: 8px;">
	<div class="row clearfix">
		<div class="col-md-12">
			<div class="admin-wraper " style="height: 100%;">
				<table class="table-bordered table table-stripe h-100">
					<thead class="thead-dark">
						<tr>
						    <th>Date</th>
						    <th>Title</th>
						</tr>
					</thead>
					<?php while($row = mysqli_fetch_assoc($result)){ ?>
						<tr>
							<td><a href="<?php echo $url ?>notice/single_notice.php?id=<?php echo $row['id']; ?>"><?php echo $row['date']; ?></a></td>
							<td><a href="<?php echo $url ?>notice/single_notice.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
</div>
</div>
<div class="container">
	<div class="mt-3 mb-2 text-center">
			Showing page <?php echo $page ?> of <?php echo $totalpage ?>
	</div>
	<div class="row clearfix">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-2">
			<?php if ($page > 1) { ?>
				<a class="float-right" style="font-size: 18px" href='<?php echo $url ?>notice/notice_board.php?page=<?php echo $page - 1 ?>'>Previous</a>
			<?php } ?>
		</div>
		<div class="col-md-4 text-center">
			<div class="btn-toolbar d-inline-block">
				<div class="btn-group mr-2">
					<?php for ($i=1; $i <= $totalpage; $i++) { ?>
					<a href="<?php echo $url ?>notice/notice_board.php?page=<?php echo $i ?>"><button type="button" style="border-radius: inherit;" class="btn btn-secondary"><?php echo $i ?></button> </a>	
					 <?php } ?>	    
				</div>								
				</div>
		</div>
		<div class="col-md-2">
			<?php if ($totalpage > $page) { ?>
				<a style="font-size: 18px" href="<?php echo $url ?>notice/notice_board.php?page=<?php echo $page + 1 ?>">Next</a>
			<?php } ?>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
</div>
<?php include("../include/footer.php") ?>
