<?php $url=("http://localhost/dwmtec/"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DWMTEC</title>
	<link rel="stylesheet" href="<?= $url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $url; ?>css/style.css">
	<link rel="stylesheet" href="<?= $url; ?>css/responsive.css">
</head>
<body>
	<div class="top-gov">
		<div class="container">
			<h5 class="text-white p-3 m-0">Government of the People's Republic of Bangladesh</h5>
		</div>
	</div>
	<div class="logo-title-bg">
		<div class="container pt-2 pb-2">
			<div class=" text-center clearfix">
				<div class="top-header-wrape">
					<div class="gov-logo">
					   <img  src="<?php echo $url; ?>image/Government_Seal_of_Bangladesh.svg" width="150px">
				   </div>
					<div class="name-title ">
					    <h1>Dr. M A WAZED MIAH TEXTILE ENGINEERNING COLLEGE</h1>
					    <h2>ড. এম এ ওয়াজেদ মিয়া টেক্সটাইল ইঞ্জিনিয়ারিং কলেজ, পীরগঞ্জ উপজেলা, রংপুর</h2>
				    </div>
				   <div class="rgov-logo">
					   <img src="<?php echo $url; ?>image/600px-DWMTEC_LOGO.png" width="150px">
				   </div>  
				</div>	
			</div>
		</div>
	</div>
	<div class="nav-bg">
	 <div class="container">
	 		<nav class="navbar navbar-expand-md navbar-light navbar-inverse ">
	 			<a class="navbar-brand" style="color:white;font-weight: bold;" href="<?php echo $url; ?>index.php">DWMTEC</a>
				  <button style="background-color:white;float: right!important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				    <span class="navbar-toggler-icon"></span>
				  </button>

			  	<div class="collapse navbar-collapse text-right" style="padding-right: 15%" id="collapsibleNavbar">
					    <ul class="navbar-nav m-auto">
					      <li class="nav-item active">
					        <a class="nav-link text-white" style="font-weight: bold;" href="<?= $url; ?>index.php">Home <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link text-white" style="font-weight: bold;" href="<?= $url; ?>notice/test.php">Features</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link text-white" style="font-weight: bold;" href="<?= $url; ?>blog/blog.php">Blog</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle text-white " style="font-weight: bold;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Dropdown link
					        </a>
					        <div class="dropdown-menu bg-dark text-right" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item text-white" href="#">Action</a>
					          <a class="dropdown-item text-white" href="#">Another action</a>
					          <a class="dropdown-item text-white" href="#">Something else here</a>
					        </div>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link text-white" style="font-weight: bold;" href="<?= $url; ?>notice/notice_board.php">Notice Board</a>
					      </li>
					    </ul>
			</nav> 
	 	</div>
	 </div>