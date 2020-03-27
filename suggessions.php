<?php 
include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ecops-home</title>
	<link rel="icon"  href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<style type="text/css">
		
		
		
		

		
		body{
			background:white;
		}
		
		
		#newsfeed{
			display: inline-block;
			position: relative;
			left:1100px;
			top: 100px;
			
			height: 200px;
			border-radius: 5%;
			width: 300px;
			background-color: lightgreen;
			border:10px solid transparent;
			border-image: url(border.png) 30% round;}
			
			#we{
				width:95%;
				background-image: linear-gradient(blue,green,red);
				height: 100%;
				position: relative;
				left: auto;
				top: 250px;
				padding: 10px;
				border-radius: 15%;
				box-shadow: -1px -1px 1px 1px #5b621b;
				padding-left: 50px;
				margin-left: 10px; 
			}
			h2{
				border-radius: 20%;
			}
			
			#sli{
				position: relative;
				bottom: 350px;
				 box-shadow: -5px -5px 5px 5px #888888;
				padding: 30px;
				border-radius: 15%;

			}
			footer{
				background: #000000;
				color: white;

			}
			#qq li{
				padding-bottom: 3px;
			}
			#wee li{
				padding-bottom: 3px;
			}
			#wee1{
				padding-bottom: 3px;
			}
			
			li a{
				text-decoration: none;
			}
			li{
				list-style-type: none;
			}
			.navbar {
  overflow: hidden;
  background-color:green;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:rgb(53,53,53) ;
}

.dropdown-content {
  display: none;
  color: white;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  border: 1px solid white;

  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgb(53,53,53);
}

.dropdown:hover .dropdown-content {
  display: block;
}
#h{
	width: 100%;
	height: 700px;
	background-image: url('help.jpg') ;
	background-size:cover;

}
#yy{
	background-image: url('suggessions.jpg')  ;
	background-size: cover;
	position: relative;
	margin-right: auto;
	margin-left: auto;
	margin-top: 0px;
	margin-bottom: 0px;
	width: 500px;
	height: 500px;
}


		


		


		 
	</style>
</head>
<body onload="change()" oncontextmenu="return false;">
	
	<div id="menu">
		<div id="pic" style="background-color: rgb(53,53,53);" ><center><img src="logo.jpeg" style="width:200px;height:100px;"></center><a href="login.php" style="text-decoration: none;position: relative;left:95%;bottom:100px;color:white;" >login</a></div>
		<div class="navbar">
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <div class="dropdown">
    <button class="dropbtn"onclick="window.location.href = 'our organisation.php';">Our Organisation
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="missionandvission.php">Mission and Vision</a>
      <a href="organisation.php">Organisation Structure</a>
      <a href="policeranks.php">Police Ranks</a>
      <a href="medals.php">Medals</a>
      <a href="emregency.php">Emergency Numbers</a>
      <a href="dosanddonts.php">Do's and Don'ts</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href = 'citizenservices.php';">Citizen Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="compliant form.php">File a Complaint</a>
      <a href="passport.php">Passport Status</a>
      <a href="echalanstatus.php">E-Chalan Payment</a>
      <a href="citizencharter.php">Citizen Charter</a>
      <a href="mostwanted.php">Most Wanted Criminals</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn " onclick="window.location.href = 'applicationform.php';">Application Forms 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="armed.php">Armed License</a>
      <a href="pass.php">Passport License</a>
      <a href="driving.php">Driving License</a>
      
      
    </div>
  </div>
  <a href="faqs.php">FAQ'S</a>
  <div class="dropdown">
    <button class="dropbtn "onclick="window.location.href = 'links.php';">External Links 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.interpol.int/en">Interpol</a>
      <a href="https://wcd.nic.in/">Ministry of Women and Child</a>
      <a href="http://www.cbi.gov.in">CBI</a>
      <a href="https://mha.gov.in/">Ministry of Human Affairs</a>
      <a href="https://www.digitalindia.gov.in">Digital India</a>
      <a href="https://rti.gov.in/">RTI</a>
     
    </div>
  </div> 
  <a href="suggessions.php">SUGGESSIONS</a>
  <a href="ecopsdocumentation.pdf" target="_BLANK">DOCS</a>
</div>
	</div>
	<div id="h">
		<center><h1 style="font-family: 'Dancing Script', cursive;font-size: 35px;color: red">We Are Very Happy To Take Suggessions From You</h1></center>
		<div id="yy">
			<?php

			if(isset($_POST['subm'])){
				$sql = "INSERT INTO suggessions (name,suggesstiontype,suggessioncomplete)
VALUES (' ".$_POST['nam']."',' ".$_POST['issuetype']."',' ".$_POST['issue']."')";
    $result = mysqli_query($con,$sql);
    if($result){
    	$cc="success";
    }
    else{
    	$cc="fail";
    }
			}
			?>
				<br>
				<form action="suggessions.php" method="POST">
					<center><p style="font-family: 'Bree Serif', serif;
">Name Of Person</p></center>
				 <center><input type="text" name="nam" style="border-radius: 15px;height: 30px;"></center>
					<center><p style="font-family: 'Bree Serif', serif;
">Suggession Type</p></center>
					<center><select name="issuetype" style="border-radius: 15px;height: 30px;" >
						<option></option>
						<option value="Front End">Front End</option>
						<option value="Back End">Back End</option>
						<option value="Server Side">Server Side</option>
						
						<option value="Other">Other</option>
					</select></center>
					<center><p style="font-family: 'Bree Serif', serif;
">Write A Suggession</p></center>
<center><textarea name="issue" rows="5" cols="50" ></textarea></center>
<center>
<input type="submit" name="subm"/><input type="reset" name="rese"/></center>
				</form>

			
		</div>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    var s="<?php echo($cc);  ?>";
   
    if(s=="success" ){
      swal("Successfully Submitted", " ", "success");

    }
    else{
      swal("OOPs!", "SomeThing Went Wrong,Try again ", "error");
    }
  </script>

</body>
<footer>
	<div id="qq" style="text-align: left;display: inline-block;">
		<h5 style="padding-left: 40px;padding-top: 10px;border-bottom: 1px solid white"><ul>Site Links</ul></h5>
		<ul style="text-decoration: none;list-style-type: none;padding-left: 60px;">
			<li><a href="about.php">About Us</a></li>
			<li><a href="our organisation.php">our organisation</a></li>
			<li><a href="citizenservices.php">citizen services</a></li>
			<li><a href="faqs.php" >FAQ's</a></li>
			<li><a href="links.php">External Links</a></li>
			<li><a href="applicationform.php">Application Forms</a></li>
		</ul>
	</div>
	<div id="wee"  style="text-align: left;display: inline-block;position: relative;left: 100px;bottom: 60px;">
		<h5 style="border-bottom: 1px solid white"><uL>Follow Us On</uL></h5>
		<ul style="text-decoration: none;list-style-type: none; padding-left: 40px;">
			<li><a href="https://www.facebook.com">Facebook</a></li>
			<li><a href="https://twitter.com/?lang=en">Twitter</a></li>
			<li><a href="https://www.instagram.com/?hl=en">Instagram</a></li>
			
		</ul>
	</div>
	<div id="wee1"  style="text-align: left;display: inline-block;position: relative;left: 200px;bottom: 90px;">
		<h5 style="border-bottom: 1px solid white;padding-bottom: 10px;"><center>Legal</center></h5>
		<ul style="text-decoration: none;list-style-type: none; padding-left: 30px;">
			<li><a href="">Privacy</a></li>
			<li><a href="">Terms</a></li>
			
			
		</ul>
	</div>
	<div id="wee2"  style="text-align: left;display: inline-block;position: relative;left: 800px;bottom: 0px;">
		<h5 style="border-bottom: 1px solid white" ><center><ul>Contact Us</ul></center></h5>
		<p><center>Ecops<br>Patna, Bihar (800005), India<br>
Phone: +91-0612-237 1715 / 237 2715<br>
FAX : +91-0612-2670631 , 0612-2660480</center></p>
<center><img src="home.jpeg" width="100px" height="50px"></center>
	</div>
	<marquee direction="right"><a href="help.php" style="color: white;text-decoration: none;">Issues In Website?Click here</a></marquee >
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
</html>
