<?php
require_once('connection.php');
session_start();
	if(isset($_POST['submit'])){
		if(empty($_POST['n1']) || empty($_POST['p1'])){
			header("location:login.php?empty=Please Fill The UserName and Password");
		}
		else{
			  $query="select * from users where username='".$_POST['n1']."' and password='".$_POST['p1']."'";
			$result=mysqli_query($con,$query);
			if(mysqli_fetch_assoc($result)){
				$_SESSION['user']=$_POST['n1'];
				header("location:webportalhome.php");
			}
			else{
				header("location:login.php?invalid=Please Enter your correct username password");
			}
		}
	} 
	else{
		echo "Not Working Guys,Try Later";
	}
 ?>