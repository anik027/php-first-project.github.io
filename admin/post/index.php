<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php include('../include/header.php'); ?>

<?php 
$url = ("http://localhost/dwmtec/admin/");
$sql    = "SELECT count(id) as total FROM dwmtec_post";
$result = mysqli_query($con, $sql);
$data   = mysqli_fetch_assoc($result);

$skip = 0;
$take = 6;
$page =1;
$totalpage = ceil($data['total'] / $take);



if (isset($_GET['page'])) {
	$page =$_GET['page'];
	$skip = ($page - 1) * $take;
}

$sql ="
		SELECT * FROM dwmtec_post
		ORDER BY id DESC		
		LIMIT $skip, $take
	";

$result = mysqli_query($con, $sql);

?>



<a href="../index.php"><button class="btn btn-primary btn-back">Back </button></a>
<a href="create.php"><button style="margin-left: 70px;" class="btn btn-primary btn-back">Add Post</button></a>

<div class="admin-wraper " >
	<table class="table-bordered table table-stripe" style="width: 100%">
		<thead class="thead-dark">
			<tr>
			    <th>Date</th>
			    <th>Title</th>
			    <th>image</th>
			    <th>Action</th>
			</tr>
		</thead>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<tr>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><img src="<?php echo $url; ?><?php echo $row['image']; ?>" width="100px"></td>
				<td>
					<a href="show.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success mt-2 mb-2  btn-sm">view</button></a>
					<a href="edit.php?id=<?= $row['id']; ?>"><button class="btn btn-primary mt-2 mb-2  btn-sm">edit</button></a>
					<a onclick="return confirm('Are you sure')" href="delete.php?id=<?= $row['id']; ?>"><button class="btn mt-2 mb-2 btn-danger  btn-sm">delete</button></a>

				</td>
			
			</tr>
		<?php } ?>
	</table>
	</div>
		<div class="mt-3 mb-2 text-center">
			Showing page <?php echo $page ?> of <?php echo $totalpage ?>
		</div>
		<div class="row clearfix">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-2">
				<?php if ($page > 1) { ?>
					<a class="float-right" style="font-size: 18px" href='<?php echo $url ?>post/index.php?page=<?php echo $page - 1 ?>'>Previous</a>
				<?php } ?>
				
			</div>
			<div class="col-md-4 text-center">
				<div class="btn-toolbar d-inline-block">
					  <div class="btn-group mr-2">
					  	<?php for ($i=1; $i <= $totalpage; $i++) { ?>
					    <a href="<?php echo $url ?>post/index.php?page=<?php echo $i ?>"><button type="button" style="border-radius: inherit;" class="btn btn-secondary"><?php echo $i ?></button> </a>	
					    <?php } ?>	    
					  </div>								
				</div>
			</div>
			<div class="col-md-2">
				<?php if ($totalpage > $page) { ?>
					<a style="font-size: 18px" href="<?php echo $url ?>post/index.php?page=<?php echo $page + 1 ?>">Next</a>
				<?php } ?>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>

<?php include("../include/footer.php") ?>
