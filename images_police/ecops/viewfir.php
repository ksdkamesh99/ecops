<?php 
session_start();
if(isset($_SESSION['user'])){
	
}
else{
	header("location:login.php");
}
 ?><?php 
include('connection.php'); ?><!DOCTYPE html>
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

						
						

		}table {
border-collapse: collapse;


border:1px solid black;
width: 60%;
font-size: 22px;
text-align: left;
}
td {
background-color: #588c7e;
color: white;
padding-left: 30px;
}
tr,td{
border:1px solid black;border-collapse: collapse;
}
tr:nth-child(even) {background-color: #f2f2f2}

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
			bottom: 700px;
			
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
			
			top: 90px;
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
			
			bottom: 110px;
			left: 750px;
			
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
		
		
		#qq{
			width: 170px;
			height: 40px;
			position: relative;
			left: 550px;
			top: 100px;
			
		}
		#qee{
			
			width: 173%;
			height: 100%;
			position:relative;
			top: 300px;
			left: 50px;
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
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;"><a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 72%;bottom: 100%">[Logout]</a>
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
		<h1 style="position: relative;left: 270px;font-family: 'Anton', sans-serif;top: 70px;"><center>VIEW FIR</center></h1>
		<div id="qq">
		
		<fieldset id="ww">
			<form id="ll" action="viewfir.php" method="POST">
				<center>
				Enter the FIR No:<br><br><br><input type="text" name="no"><br><br>
				<center><input type="submit" name="sub" value="VIEW FIR"></center></center>

			</form>
		</fieldset>

	</div>
	<div id="qee">
		<table>
		<?php 
			if(isset($_POST['sub'])){
				$sql=" SELECT * FROM firs WHERE (`fir_id` LIKE '%".$_POST['no']."%') ";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<h1>Search Results:</h1>";
					while($results=mysqli_fetch_array($result)){
						
						echo "<tr><td>"."Name"."</td><td>" . $results["name"] . "</td></tr>";
						echo "<tr><td>"."Fir Id"."</td><td>" . $results["fir_id"] . "</td></tr>";
                        echo "<tr><td>"."Phone"."</td><td>" . $results["phone"] . "</td></tr>";
                        echo "<tr><td>"."Email"."</td><td>" . $results["email"] . "</td></tr>";
                        echo "<tr><td>"."Address"."</td><td>" . $results["address"] . "</td></tr>";
                        echo "<tr><td>"."Pin Code"."</td><td>" . $results["pincode"] . "</td></tr>";
                        echo "<tr><td>"."City"."</td><td>" . $results["city"] . "</td></tr>";
						echo "<tr><td>"."Date Of Occurance"."</td><td>" . $results["dis_f"] . "</td></tr>";
						echo "<tr><td>"."Distance From Police Station"."</td><td>" . $results["dis_f"] . "</td></tr>";
                        echo "<tr><td>"."Direction From Police Station"."</td><td>" . $results["dir_f"] . "</td></tr>";
                        echo "<tr><td>"."Date Of Occurance"."</td><td>" . $results["date_com"] . "</td></tr>";
                        echo "<tr><td>"."Hour Of Occurance"."</td><td>" . $results["time_com"] . "</td></tr>";
                        echo "<tr><td>"."Description of Accused"."</td><td>" . $results["text_complaint_acd"] . "</td></tr>";
                        echo "<tr><td>"."Details Of Witness"."</td><td>" . $results["complaint_wit"] . "</td></tr>";
						

					}
				}
				else{
					echo "<h1>Such Records Not Found";
				}
			}
		 ?>
		</table>
	</div>
	
</body>

</html>
