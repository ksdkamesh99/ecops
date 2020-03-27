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
<body oncontextmenu="return false;">
	<div id="q">
		<img src="logo.jpeg" style="padding-left: 20px;padding-top: 5px;" >
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;"><a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 71%;bottom: 100%">[Logout]</a>
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
		<form action="xyz.php" method="post" >
<fieldset>
<legend>Appointments and Transfer</legend>
<br><br>
<bold>Name : </bold> <input type="text" name="fname" placeholder="first name" >  <input type="text" name="lname" placeholder="last name"><br><br><br>
<bold>Service :</bold><select name="services">
    <option value="ASI"/>ASI </option>
    <option value="Constable"/> Constable</option>
    <option value="DSP"/>DSP</option>
    <option value="Inspector"/>Inspector </option>
    <option value="Head Constable"/>Head Constable </option>
    <option value="Senior Constable"/>Senior Constable </option>
    <option value="Sub-Inspector"/>Sub-Inspector </option>
  </select><br><br><br>
<bold>Id NO :</bold> <input type="text"  name="id_no"><br><br><br>
Appointment<input type="radio"  name="action" value="appointment">Transfer<input type="radio"  name="action" value="transfer"><br><br><br>
<bold>From : </bold> <select name="to">  
        <option value="Araria"  selected>Araria</option>
        <option value="Arwal">Arwal</option>
        <option value="Arrah">Arrah</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Banka">Banka</option>
        <option value="Begusarai">Begusarai</option>
        <option value="Bhagalpur">Bhagalpur</option>
        <option value="Buxar">Buxar</option>
        <option value="Darbhanga">Darbhanga</option>
        <option value="Champaran">Champaran</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Katihar">Katihar</option>
         <option value="Motihari">Motihari</option>
        
        <option value="Nalanda">Nalanda </option>
        <option value="Patna">Patna</option>
        <option value="Rohtas">Rohtas</option>
        <option value="Saran">Saran</option>
        </select> 
<bold>To : </bold><select name="to"> 
      <option value="Araria"  selected>Araria</option>
        <option value="Arwal">Arwal</option>
        <option value="Arrah">Arrah</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Banka">Banka</option>
        <option value="Begusarai">Begusarai</option>
        <option value="Bhagalpur">Bhagalpur</option>
        <option value="Buxar">Buxar</option>
        <option value="Darbhanga">Darbhanga</option>
        <option value="Champaran">Champaran</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Katihar">Katihar</option>
         <option value="Motihari">Motihari</option>
        
        <option value="Nalanda">Nalanda </option>
        <option value="Patna">Patna</option>
        <option value="Rohtas">Rohtas</option>
        <option value="Saran">Saran</option>
        </select><br><br><br>
 
<bold>Comments :</bold><br> <textarea rows="10" cols="50" >  </textarea><br><br><br>
<center><input type="submit">  </center><br><br><br>

 
</fieldset> 
</form>
	</div>
	
</body>

</html>
