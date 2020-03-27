<?php 
	$con=mysqli_connect('localhost','root','','ecops');
	if(!$con){
		die('please Check Your Connection'.mysqli_error($con));
	}
 ?>