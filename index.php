<?php 

include('include/connection.php');

$con = connectDB();

$sql    = "SELECT * FROM dwmtec_notice 
		   ORDER BY id DESC
		   LIMIT 0, 4";
$result = mysqli_query($con,$sql);

$blogsql    = "SELECT * FROM dwmtec_post 
		   ORDER BY id DESC
		   LIMIT 0, 4";
$blogresult = mysqli_query($con,$blogsql);


?>





<?php include('include/header.php'); ?>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-9">
			<div class="hero-slider">
				
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="image/slider/hero.jpg" width="100%" height="400px">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="image/slider/slide2.jpg" width="100%" height="400px">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="image/slider/slide3.jpg" width="100%" height="400px">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>

			</div>
		</div>
		<div class="col-md-3 ">
			<a href="#"><img  src="image/add1.jpg" width="100%"></a>
			<iframe src="https://www.youtube.com/watch?v=_AAmKAdvMTA" frameborder="0" width="100%;"></iframe>
		</div>
	</div>
</div>

<!...............PRINCPALE CONTENT................>

<div class="container">
	<div class="principle-content-wraper">
		<div class="row clearfix" style="overflow:hidden; margin-right: 0;">
			<div class="col-md-6 pr-0">
				<img class="p-3" src="image/pcpl.jpeg" width="100%" height="100%">
			</div>
			<div class="col-md-3 pl-0 pr-0">
				<div class="p-3 principle-about">
					<div class="wraper">
						<h3>
							Welcome to DWMTEC
						</h3>
						<P>Dr. MA Wazed Miah Textile Engineering college is an engineering educational institute in Bangladesh offering Graduation in different... <a class="mt-0 pt-0"  href="#">Read more></a> </P>
					</div>
					<div class="msg-wraper p-2">
						<h4>Message of principle</h4>
						<div class="row clearfix">
							<div id="principlePhoto" class="col-md-4 pr-0" >
								<img  src="image/p1.jpg" style="border-radius: 50%;" width="100%">
							</div>
							<div class="col-md-8" style="line-height: 1.2;">
								<p>Welcome to everybody showing interest to our College. Dr. MA wazed miah textile engineering   .</p>
							</div>
						</div>
						<a class="mt-0 pt-0"  href="#">Read more></a>

					</div>
				</div>
			</div>

			<!..........NOTICE BOARD................>

			<div class="col-md-3 pl-0 side-padding-notice pr-0" style="margin-bottom: 15px;
    border-radius: 5px;">
				<div class="home-notice p-3 ">
					<h3 class="text-darken" style="text-align: center;"> Academic Notice</h3>

					<div class="notice-bg-wraper bg-white">

						<?php while($row=mysqli_fetch_assoc($result)){ ?>

						<div class="row clearfix notice-wraper ml-0 pt-2 pb-2 ">
								<div class="col-md-4 pr-2">
									<a href="notice/single_notice.php?id=<?php echo $row['id']; ?>">
										<div class="single-date-wraper">
											<span><?php echo $row['date']; ?></span>
										</div>
									</a>
								</div>		
								<div class="col-md-8 pl-2">
									<div class="single-title-notice">
										<a href="notice/single_notice.php?id=<?php echo $row['id']; ?>"><h2><?php echo $row['title']; ?></h2></a>
									</div>
								</div>
							
						</div>

						<?php } ?>

						
							
						</div>
						<a href="notice/notice_board.php" style="font-size: 20px;float: right; color: #fff; "> see all >></a>
					</div>


				</div>

			</div> 
		</div>
	</div>
</div>
<!...........ACADEMIC PROGRAM...........>
<section class="program h-100" >
	<div class="container">
		<div class="principle-content-wraper">
			<div class="row clearfix">
				<div class="col-md-4">
					<div class="single-program-box">
						<div class="program-title">
							<h4>FACULTIES</h4>
						</div>
						<ul>
							<li><a href="#">Faculty of Textile Chemical Engineering</a></li>
							<li><a href="#">Faculty of Textile Engineering</a></li>
							<li><a href="#">Faculty of Textile Fashion Design & Apparel Engineering</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="single-program-box">
						<div class="program-title">
							<h4>OFFERED DEGREE</h4>
						</div>
						<ul>
							<li style="border-left: none;" ><a href="#">B. Sc. in Textile Engineering (Apparel)</a></li>
							<li style="border-left: none;"><a href="#">B. Sc. in Textile Engineering (Fabric)</a></li>
							<li style="border-left: none;"><a href="#">B. Sc. in Textile Engineering (Wet Process)</a></li>
							<li style="border-left: none;"><a href="#">B. Sc. in Textile Engineering (Yarn)</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="single-program-box">
						<div class="program-title">
							<h4>DEPARTMENTS</h4>
						</div>
						<ul>
							<li style="border-left: none; border-right:8px solid #035762;"><a href="#">Yarn Engineering</a></li>
							<li style="border-left: none; border-right:8px solid #035762;"><a href="#">Wet Process Engineering</a></li>
							<li style="border-left: none; border-right:8px solid #035762;"><a href="#">Fabric Engineering</a></li>
							<li style="border-left: none; border-right:8px solid #035762;"><a href="#">Apparel Engineering</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-scetion">
		<h1 class="text-center pt-3 pb-3">BLOG, GENERAL NOTICE</h1>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-9 w-100" style="">
				<div class="single-blog-box">
					<div class="program-title" style="border-top: none;">
						<h4>Recent Post</h4>
					</div>
				<!.........SINGLE POST.......>
				<div class="all-post" style="height: 424px; overflow:auto;">

				<?php while ($row=mysqli_fetch_assoc($blogresult)) { ?>
				
					<div class=" single-blog">	
						<div class="title">
								<a  href="blog/single-blog.php?id=<?php echo $row['id'] ?>"><h2 style="font-size: 18px"><?php echo $row['title']; ?></h2></a>
						</div>

					<div class="row clearfix">
						<div class="col-md-3 pl-2" style="height: 100px;">
							<img src="admin/<?php echo $row['image']; ?>" width="100%" height="100%">
						</div>
						<div class="col-md-9 pl-0">
							<div class="description">
								<p style="font-size: 13px; margin-bottom: 0px;"><?php echo substr($row['description'],0, 700); ?> </p>
								<a class="ml-1 float-right" href="blog/single-blog.php?id=<?php echo $row['id'] ?>"> Read More>></a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>


		</div>
		</div>	
			<div class="col-md-3" >
				<div class="single-blog-box"  >
					<div class="program-title"style="border-top: none;">
						<h4>Important Hotline</h4>
					</div>
					<img src="image/Hotline_BN.png" style="margin-top: -7px;width: 100%;" alt="">
					<div class="program-title" style="border-top: none; text-align: center;    " >
						<a  style="color:#fff;" href="#"> More..</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>
<!.............CONTACT FROM..................>

<section class="contact-section mt-5">
	    <h2 class="text-center text-white pt-3 mb-3">Contact Us</h2>
	<div class="container">
		<div class="principle-content-wraper p-3">
		<form>
			 	<div class="form-group d-block">
				    <label for="name">First Name</label>
				    <input type="text" class="form-control" name="firstName"  required="" placeholder="First Name">   
				</div>
				<div class="form-group  d-block">
				    <label for="name">Last Name</label>
				    <input type="text"  class="form-control" required="" name="lastName" placeholder="Last Name">   
				</div>	
				<div class="form-group ">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" name="email" required="" placeholder="Enter Email">   
				</div>	
				<div class="form-group">
				    <label for="message">Message</label>
				    <textarea name="msg" class="form-control" rows="10" placeholder="Write Message"></textarea>  
				</div>		  
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</section>
<section>
<iframe src="https://www.google.com/maps/place/Dr.+M+A+Wazed+Mia+Textile+Engineering+College/@25.4315413,89.1490959,14z/data=!4m5!3m4!1s0x0:0x3d9e6bbf31f968a8!8m2!3d25.4311927!4d89.1505551" width="100%" height="auto" frameborder="0"></iframe>
</section>
<?php include("include/footer.php") ?>
