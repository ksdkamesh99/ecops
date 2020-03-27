<?php 
include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ecops-about</title><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
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


		#pp,#ppp{
			background-color: gray;
			color: blue;

		}
		#d1{
			background-image: url('formbackground.jpg');
			color: white;
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
			}li a{
			text-decoration: none;
			color: white;
		}
		li{
			list-style-type: none;}


	</style>
</head>
<body>
<div id="menu">
		<div id="pic" style="background-color: rgb(53,53,53);" ><center><img src="logo.jpeg" style="width:200px;height:100px;"></center><a href="login.html" style="text-decoration: none;position: relative;left:95%;bottom:100px;color:white;" >login</a></div>
		<div class="navbar">
  <a href="home.html">Home</a>
  <a href="about.html">About</a>
  <div class="dropdown">
    <button class="dropbtn"onclick="window.location.href = 'our organisation.html';">Our Organisation
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="missionandvission.html">Mission and Vision</a>
      <a href="organisation.html">Organisation Structure</a>
      <a href="policeranks.html">Police Ranks</a>
      <a href="medals.html">Medals</a>
      <a href="emregency.html">Link 2</a>
      <a href="dosanddonts.html">Do's and Don'ts</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href = 'citizenservices.html';">Citizen Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="compliant form.php">File a Complaint</a>
      <a href="passport.html">Passport Status</a>
      <a href="echalanstatus.html">E-Chalan Status</a>
      <a href="citizencharter.html">Citizen Charter</a>
      <a href="criminals.html">Most Wanted Criminals</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn " onclick="window.location.href = 'applicationform.html';">Application Forms 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="armed.html">Armed License</a>
      <a href="pass.html">Passport License</a>
      <a href="driving.html">Driving License</a>
      
      
    </div>
  </div>
  <a href="faqs.html">FAQ'S</a>
  <div class="dropdown">
    <button class="dropbtn "onclick="window.location.href = 'links.html';">External Links 
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
</div>
	</div>
	<div id="d1">
	
	
		<?php 

if(isset($_POST['subm'])){
	$sql = "INSERT INTO complaints (subject,date_com,time_com,text_complaint,name,phone,email,address,pincode,city,ps)
VALUES (' ".$_POST['sub']."', ' ".$_POST['date']."',' ".$_POST['time']."',' ".$_POST['com']."',' ".$_POST['nam']."',' ".$_POST['phone']."',' ".$_POST['email']."',' ".$_POST['add']."',' ".$_POST['pin']."',' ".$_POST['city']."',' ".$_POST['ps']."')";
    $result = mysqli_query($con,$sql);
    



}
 ?>
 
 
			<fieldset>
				<legend>Complaint Form</legend>
				<p id="pp">Compliant Detail</p>
				<form action="compliant form.php" method=POST>
					<pre ><b>Subject:</b>             <input type="text" name="sub"required/></pre>
					<pre ><b>Date Of Incident:</b>    <input type="text" name="date">**enter in any dd/mm/yyyy format</pre>
					<pre ><b>Time Of Incident:</b>    <input type="text" name="time"required/></pre>
					<pre ><b>near police station the incident took place:</b>    <input type="text" name="ps"required/></pre>
					<pre><b><p style="position: relative;top: 90px;">Write Complaint:</p></b>                     <textarea name="com" rows="10" cols="100"></textarea></pre>
					
				
				<p id="ppp">Personal Detail</p>
				
					<pre ><b>Name:</b>              <input type="text" name="nam"required/></pre>
					<pre ><b>Phone:</b>             <input type="text" name="phone"required/></pre>
					<pre ><b>Email:</b>             <input type="text" name="email"required/></pre>
					<pre><b><p style="position: relative;top: 90px;">Complete Address:</p></b>                   <textarea name="add" rows="10" cols="70"></textarea></pre>
					<pre ><b>PinCode:</b>          <input type="text" name="pin"required/></pre>
					<pre ><b>City:</b>             <input type="text" name="city"required/></pre>
					<br><br>
					<input type="checkbox" name="check">My information which is submitted is correct<br>
					
					<center><input type="reset" name="rese" value="Reset"><input type="submit" name="subm" value="Submit"></center>



				</form>
			</fieldset>
		
	</div>
	 
</body>
<footer>
	<div id="qq" style="text-align: left;display: inline-block;">
		<h5 style="padding-left: 40px;padding-top: 10px;border-bottom: 1px solid white"><ul>Site Links</ul></h5>
		<ul style="text-decoration: none;list-style-type: none;padding-left: 60px;">
			<li><a href="about.html">About Us</a></li>
			<li><a href="our organisation.html">our organisation</a></li>
			<li><a href="citizenservices.html">citizen services</a></li>
			<li><a href="faqs.html" >FAQ's</a></li>
			<li><a href="links.html">External Links</a></li>
			<li><a href="applicationform.html">Application Forms</a></li>
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
	</div><marquee direction="right"><a href="help.php" style="color: white;text-decoration: none;">Issues In Website?Click here</a></marquee >
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
</html>

