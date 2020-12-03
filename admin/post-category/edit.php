<?php  
session_start();
if (!isset($_SESSION['userId'])) {
  echo "<script language=javascript>document.location.href='login.php'</script>";
  die();
} 
?>
<?php include('../include/header.php'); ?>
<?php
if(isset($_GET['id'])){ 
$id = $_GET['id'];
$sql    = "SELECT * FROM dwmtec_catagories WHERE id=$id";
$result = mysqli_query($con,$sql);
$row    = mysqli_fetch_assoc($result);
}
?>


 
  
  
  <a href="index.php"><button class="btn btn-success mb-3">back</button></a>
   
   <div class="content ">
   <h2 class="text-dark">Edit category</h2><hr>
       <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
          <div class="form-group">
            <label class="font-weight-bold" for="title">Title :</label>
            <input type="text" class="form-control"  id="title" value="<?php echo $row['title']; ?>" name="title" placeholder="Title">
          </div>  
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>





<?php include('../include/footer.php'); ?>         
           