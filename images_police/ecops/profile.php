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


		}#ii p{
			color: red;
			
			position: relative;
			right: 50px;
			top: 11px;
		}
		#qqq{
			
			position: relative;
			bottom: 600px;
			background-color: #FFFACD;
			margin-left: 300px;
			width: 1000px;
			height:730px;
			font-family: verdana;
			color: black;
			box-shadow: 1px 1px 1px 1px green;
			padding-left: 50px;
			

		}
		input,textarea {
			box-shadow: 1px 1px 1px 1px #5b621b;
  border: 2px solid red;
  border-radius: 4px;
  background-color: yellow;
  text-align: left;
  width: 30%;
}
		



		
	</style>
</head>
<body>

	<div id="q">
		<img src="logo.jpeg" style="padding-left: 20px;padding-top: 5px;" >
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;">
		<a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 72%;bottom: 100%">[Logout]</a>
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
		<?php 
		$id=$_SESSION['user'];
				$sql=" SELECT * FROM users WHERE username= '".$id."'";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0){
					
					while($results=mysqli_fetch_array($result)){
						
						$ps=$results['ps'];
						$desig=$results['desig'];
						$name=$results['name'];
						$sno=$results['sno'];
						$areasundercontrol=$results['areasundercontrol'];
						$age=$results['age'];
						$dateofbirth=$results['dateofbirth'];
						$address=$results['address'];
						$phone=$results['phone'];
						$email=$results['email'];
						$image=$results['image'];

					}
				}?>

		 
		<center><h1>MY PROFILE</h1></center>
		<pre>Name:                     <input type="text" value="<?php echo $name; ?>" readonly ></pre>

<img src="<?php echo $image;?>" style="float: right;width: 150px;height: 150px;position:relative;right: 200px;"><br>
		<pre>Police Id:                <input type="text" value="<?php echo $sno; ?>" readonly ></pre>
<br>
		<pre>Designation:              <input type="text" value="<?php echo $desig; ?>" readonly ></pre>
<br>
		<pre>Police Station:           <input type="text" value="<?php echo $ps; ?>" readonly ></pre>
<br>
		<pre>Areas Under Control:      <input type="text" value="<?php echo $areasundercontrol; ?>" readonly ></pre>
<br>
		<pre>Age:                      <input type="text" value="<?php echo $age; ?>" readonly ></pre>
<br>
		<pre>Date Of Birth:            <input type="text" value="<?php echo $dateofbirth; ?>" readonly ></pre>
<br>
		<pre>Address:                  <textarea  ><?php echo $address; ?></textarea></pre>
<br>
		<pre>Phone No:                 <input type="text" value="<?php echo $phone; ?>" readonly ></pre>
<br>
		<pre>Email Address:            <input type="text" value="<?php echo $email; ?>" readonly ></pre>
<br>
		
		
		</div>
	
	
</body>
<footer style="position:relative;background-color: black;color: white;">
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
	

	
</html>
	

