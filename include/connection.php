<?php

function connectDB(){
	$con  = mysqli_connect('localhost','root','','dwmtec');
	return $con;
}


?>