<?php 
session_start();
if(isset($_SESSION['user'])){
	echo "hi";
	echo '<a href="logout.php?logout">logout</a>';
}
else{
	header("location:login.php");
}
 ?>

