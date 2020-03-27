<?php 
include('connection.php'); ?>
<?php 
session_start();
if(isset($_SESSION['user'])){
	
}
else{
	header("location:login.php");
}
 ?>
<!DOCTYPE html>
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
			left: 100px;
			
			margin-left: 200px;
			width: 750px;
			height: 10px;
			

		}#ii p{
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
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;"><a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 71%;bottom: 100%">[Logout]</a><div id="ii" style="text-align:left;color: orange;width: 200px;position: relative;;left:86%;bottom: 90%">
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
		<h1 style="position: relative;left: 0px;font-family: 'Anton', sans-serif;top: 0px;"><center>First Information Report [ F . I . R ] </center></h1>
		
		
		
		
		
		
		<?php 

if(isset($_POST['subm'])){
	$sql = "INSERT INTO firs (name,phone,email,address,pincode,city,dis_f,dir_f,date_com,time_com,text_complaint_acd,complaint_wit)
VALUES (' ".$_POST['nam']."',' ".$_POST['phone']."',' ".$_POST['email']."',' ".$_POST['add']."',' ".$_POST['pin']."',' ".$_POST['city']."',' ".$_POST['disp']."',' ".$_POST['dirp']."',' ".$_POST['date']."',' ".$_POST['time']."',' ".$_POST['com_acd']."',' ".$_POST['com_wit']."')";
    $result = mysqli_query($con,$sql);
}
 ?>
 
 
 
 
 
<fieldset>
			<form action="firwriting.php" method="POST">
				<h1 style="position: relative;left: 0px;font-family:  sans-serif;font-size:12px;top: 0px;"><center>Personal Details of Informant</center></h1>
				<pre ><b>Name:</b>              <input type="text" name="nam"required/></pre>
					<pre ><b>Phone:</b>             <input type="text" name="phone"required/></pre>
					<pre ><b>Email:</b>             <input type="email" name="email"required/></pre>
					<pre><b><p style="position: relative;top: 90px;">Complete Address:</p></b>                   <textarea rows="10" cols="70" name="add"></textarea></pre>
					<pre ><b>PinCode:</b>          <input type="text" name="pin"required/></pre>
					<pre ><b>City:</b>             <input type="text" name="city"required/></pre>
					<br><br>
					<h1 style="position: relative;left: 0px;font-family:  sans-serif;font-size:12px;top: 0px;"><center>Place Of Occurance</center></h1><br><br>
					<pre><b>Distance from Police Station</b>              <input type="text" name="disp"></pre>
					<pre><b>Direction from Police Station</b>             <input type="text" name="dirp"></pre>
					<h1 style="position: relative;left: 0px;font-family:  sans-serif;font-size:12px;top: 0px;"><center>Date and hour of occurance</center></h1><br><br>
					<pre><b>Date of Occurance</b>              <input type="text" name="date"></pre>
					<pre><b>Hour of Occurance</b>             <input type="text" name="time"></pre>
					<h1 style="position: relative;left: 0px;font-family:  sans-serif;font-size:12px;top: 0px;"><center>Other Details</center></h1>
					<pre><b><p style="position: relative;top: 90px;">Description of <br>Accused:</p></b>               <textarea rows="10" cols="70" name="com_acd"></textarea></pre>
					<pre><b><p style="position: relative;top: 90px;">Details of <br>witness:</p></b>               <textarea rows="10" cols="70" name="com_wit"></textarea></pre>
					 <center><input type="submit" name="subm" value="SEND"><input type="reset" name="rese" value="RESET"></center><br><br>

			</form>
		</fieldset>
	</div>
	
</body>

</html>
