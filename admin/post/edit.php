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
$sql ="SELECT * FROM dwmtec_post WHERE id='$id'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

$sql1 ="SELECT * FROM dwmtec_catagories";
$result1 = mysqli_query($con, $sql1);


?>



<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Edit your post <hr></h2>
			<form action="update.php?id=<?=$data['id']; ?>" method="post" enctype="multipart/form-data">
			 	<div class="form-group d-block">
				    <label for="title"><b>Title</b></label>
				    <input type="text" class="form-control" name="title"  required="" value="<?php echo $data['title'] ?>"> 				      
				</div>
				<div class="form-group d-block">
				    <label for="description"><b>Description</b></label>
				   <textarea name="description" class="w-100" rows="10" required=""><?php echo $data['description'] ?></textarea> 				      
				</div>
				<div class="form-group  d-block">
				    <label for="image"><b>Image</b></label>
				    <input type="file"  class="form-control"  name="image">   
				</div>
				<img src="<?php echo $url; ?><?php echo $data['image']; ?>" width="200px">
				<div class="form-group  d-block">
				    <label for="date"><b>Date</b></label>
				    <input type="date"  class="form-control" required="" name="date" value="<?php echo $data['date'] ?>">   
				</div>	
				<div class="form-group">
		            <label class="font-weight-bold" for="category">Category :</label>
		            <select class="form-control" name="category_id" id="category">
		                <option >Select Category</option>
		                
		                <?php while($row = mysqli_fetch_assoc($result1)) { ?>
		                <?php if ($data['category_id'] == $row['id']) { ?>
		                	<option value="<?= $row['id']; ?>" selected><?= $row['title']; ?></option>
		                <?php }else{ ?>
		                
		                <option value="<?= $row['id']; ?>"><?= $row['title']; ?></option>
		                
		                <?php }} ?>
		                
		            </select>
		          </div>
						  		  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
