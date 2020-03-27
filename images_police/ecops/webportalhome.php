<?php 
session_start();
if(isset($_SESSION['user'])){
	
}
else{
	header("location:login.php");
}
 ?><?php 
include('connection.php');
 ?>
<html>
<head>
	<title>ecops-captive portal</title>
	<link rel="icon"  href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<style type="text/css">
		#q{
			background-color: #000000;
			width: 100%;
			height: 100px;
		}
		#q1{
			background-color: #FFD700;
			width: 200px;
			height: 600px;
			position: relative;
			bottom: 20px;
		}
		#ee1{
			border: 1px solid black;
			text-decoration: none;
			color: black;
		}

		li{
			list-style-type: none;
			background-color: white;
			position: relative;
			right: 40px;
						width: 200px;
			border: 1px 

						
						

		}
		li a{
			text-decoration: none;
			color: black;
			text-align: center;
		}
		li ul  li {
		background-color: lightgray;
		padding-bottom: 20px;
		border: 1px solid brown;
		box-shadow: 3px 3px 2px 2px blue;

		}
		li ul{
					
		position: relative;
		display: none;
						
						
		}
		#ww9{
			padding-bottom: 70px;
		}
		#ww1,#ww2,#ww3,#ww4,#ww5,#ww6,#ww7,#ww8,#ww9{
			padding-bottom: 20px;
			box-shadow: 3px 3px 2px 2px red;
		}
		


		#ww2:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;
			


		}
		
		#ww1:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww3:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww4:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww5:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww6:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;

		}
		#ww7:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww8:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#ww9:hover ul{
			display: block;
			box-shadow: 3px 3px 2px 2px red;


		}
		#qqq{
			position: relative;
			bottom: 600px;
			
			margin-left: 200px;
			width: 750px;
			height: 10px;
			

		}
		#d1{
			width: 200px;
			height: 200px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
			position: relative;
			
		
			left: 250px;
		}
		#d11{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d1:hover{
			opacity: 10;
		}
		#d1:hover #d11{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p1{
			position: relative;text-decoration-style: none;
			text-align: center;
		}
		#d1:hover #p1{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d2{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 200px;
			left: 550px;
			
			padding-left: 20px;
			transition-delay: 2s;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 5s;
		}
		#d22{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d2:hover{
			opacity: 10;
		}
		#d2:hover #d22{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p2{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d2:hover #p2{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d3{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 400px;
			left:900px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d33{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d3:hover{
			opacity: 10;
		}
		#d3:hover #d33{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p3{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d3:hover #p3{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d4{
			width: 200px;
			height: 200px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
			position: relative;
			bottom: 350px;
			left:250px;
		}
		#d44{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d4:hover{
			opacity: 10;
		}
		#d4:hover #d44{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p4{
			position: relative;text-decoration-style: none;
			text-align: center;
		}
		#d4:hover #p4{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d1,#d2,#d3,#d4,#d5,#d6{
			border-radius: 5% 5% 5% 5%;

		}
		
		#d5{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 550px;
			left: 550px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d55{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d5:hover{
			opacity: 10;
		}
		#d5:hover #d55{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p5{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d5:hover #p5{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d6{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom:750px;
			left: 900px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d66{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d6:hover{
			opacity: 10;
		}
		#d6:hover #d66{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p6{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d6:hover #p6{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#ii p{
			color: red;
			
			position: relative;
			right: 50px;
			top: 11px;
		}



		
	</style>
</head>
<body>

	<div id="q">
		<img src="logo.jpeg" style="padding-left: 20px;padding-top: 5px;" >
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;">
		<a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 71%;bottom: 100%">[Logout]</a>;
		<div id="ii" style="text-align:left;color: orange;width: 200px;position: relative;;left:86%;bottom: 90%">
			<?php 
		$id=$_SESSION['user'];
				$sql=" SELECT * FROM users WHERE username= '".$id."'";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0){
					
					while($results=mysqli_fetch_array($result)){
						
						$name=$results['name'];
						$desig=$results['desig'];
						$ps=$results['ps'];
						$image=$results['image'];

					}
				}
					echo "Hello Mr.".$name;
				?>
	<a style="text-decoration: none;" href="profile.php"><img src="<?php echo $image; ?>" width="50px" height="50px"style="position: relative;left: 0px;float: left;display: inline-block;bottom: 6px;right: 70px;"><?php echo "<p>Profile</p>"; ?></a>

		
		</div>
	</div>
	



	<div id="q1">
		<div><h1>Activity</h1></div>
		<ul id="eee">
			<li id="ww7" style="background-color: lightgreen"><a href="viewfir.php"><center>Home</center></a></li>
			
			<li id="ww1"><a href="vpshome.php"><center>Virtual Police Station</center></a><ul id="ww11"><li><a href="appointingtransfer.php"><center>Appointing/Transfer</center></a></li><li><a href="areasundercontrol.php"><center>Areas Under Control </center></a></li><li><a href="firwriting.php"><center>First Information Report</center></a></li><li ><a href="casestatus.php"><center>Case Status</center></a></li></ul></li>
			<li id="ww2"><a href="complaints.php"><center>Complaints</center></a></li>
			<li id="ww3"><a href="infohome.php"><center>Information Sharing</center></a><ul><li><a href="send.php"><center>Send</center></a></li><li><a href="received.php"><center>Received</center></a></li></ul></li>
			
			<li id="ww5"><a href="magistrate.php"><center>Magistrate</center></a></li>
			<li id="ww6"><a href="viewfir.php"><center>View FIR</center></a></li>
			<li id="ww3"><a href="criminalinfo.php"><center>Criminals</center></a><ul><li><a href="criminals.php"><center>Criminal Search</center></a></li><li><a href="addcriminals.php"><center>Add a New Criminal</center></a></li><li><a href="deletecriminals.php"><center>Delete a Criminal</center></a></li><li><a href="updatecriminals.php"><center>Update Details a Criminal</center></a></li><li><a href="listofcriminals.php"><center>List of Criminals</center></a></li></ul></li>
			
			
		</ul>
	</div>
	<div id="qqq">
		<h1 style="position: relative;left: 300px;font-family: 'Anton', sans-serif;"><center>Welcome To Ecops Web Portal</center></h1>
		<div id="d1"><a href="vpshome.php"><img src="policestation.jpg" width="200px" height="200px"><div id="d11" style=""><center><p id="p1" >Virtual Police Station</p></center></div></a></div>
	<div id="d2"><a href="complaints.php"><img src="complaints.png" width="200px" height="200px"><div id="d22" style=""><center><p id="p2">Complaints</p></center></div></a></div>
	<div id="d3"><a href="infohome.php"><img src="info.jpg" width="200px" height="200px"><div id="d33" style=""><center><p id="p3">Information Sharing</p></center></div></a></div>
	<div id="d4"><a href="criminalinfo.php"><img src="criminals.jpg" width="200px" height="200px"><div id="d44" style=""><center><p id="p4">Criminals</p></center></div></a></div>
	<div id="d5"><a href="magistrate.php"><img src="magis.jpg" width="200px" height="200px"><div id="d55" style=""><center><p id="p5">Magistrate</p></center></div></a></div>
	<div id="d6"><a href="viewfir.php"><img src="fir.jpg" width="200px" height="200px"><div id="d66" style=""><center><p id="p6">View FIR</p></center></div></a></div></div>
	
	
</body>
<footer style="position:relative;background-color: black;color: white;">
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
	

	
</html>
	

