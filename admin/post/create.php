<?php  
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script language=javascript>document.location.href='login.php'</script>";
	die();
}	
?>
<?php include('../include/header.php'); ?>
<?php 
$sql    = "SELECT * FROM dwmtec_catagories";
$result = mysqli_query($con, $sql);

?>




<a href="index.php"><button class="btn btn-primary btn-back">Back</button></a>
<div class="admin-wraper p-3">
		<h2>Add a new post <hr></h2>
			<form action="store.php" method="post" enctype="multipart/form-data">
			 	<div class="form-group d-block">
				    <label for="title"><b>Title</b></label>
				    <input type="text" class="form-control" name="title"  required="" placeholder="title"> 				      
				</div>
				<div class="form-group d-block">
				    <label for="description"><b>Description</b></label>
				   <textarea name="description" class="w-100" rows="10" required="" placeholder="Write your post description"></textarea> 				      
				</div>
				<div class="form-group  d-block">
				    <label for="image"><b>Image</b></label>
				    <input type="file"  class="form-control"  name="image">   
				</div>
				<div class="form-group  d-block">
				    <label for="date"><b>Date</b></label>
				    <input type="date"  class="form-control" required="" name="date">   
				</div>	
				<div class="form-group">
		            <label class="font-weight-bold" for="category">Category :</label>
		            <select class="form-control" name="category_id" id="category">
		                <option >Select Category</option>
		                
		                <?php while($row = mysqli_fetch_assoc($result)) { ?>
		                
		                <option value="<?= $row['id']; ?>"><?= $row['title']; ?></option>
		                
		                <?php } ?>
		                
		            </select>
		          </div>
						  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include("../include/footer.php") ?>
