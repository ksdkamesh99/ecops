<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon"  href="favicon.ico">
	
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


		#d1{
			width: 200px;
			height: 200px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
			position: relative;
			top: 100px;
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
			position: relative;
			text-decoration-style: none;
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
			
			bottom: 100px;
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
			text-decoration-style: none;
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
			
			bottom: 300px;
			left: 900px;
			
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
			text-decoration-style: none;
			text-align: center;
		}
		#d3:hover #p3{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		body{
			background: #C0C0C0;
		}
		

		 
	</style>
</head>
<body>
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
      <a href="emregency.php">Link 2</a>
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
      <a href="echalanstatus.php">E-Chalan Status</a>
      <a href="citizencharter.php">Citizen Charter</a>
      <a href="criminals.php">Most Wanted Criminals</a>
      
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
</div>
	</div>
	<h1><center>Application Forms</center></h1>
	<div id="d1"><a href="armed.php"><img src="arm.jpg" width="200px" height="200px"><div id="d11" style=""><center><p id="p1" >Armed License</p></center></div></a></div>
	<div id="d2"><a href="pass.php"><img src="pass.jpg" width="200px" height="200px"><div id="d22" style=""><center><p id="p2">Passport License</p></center></div></a></div>
	<div id="d3"><a href="driving.php"><img src="driving.jpg" width="200px" height="200px"><div id="d33" style=""><center><p id="p3">Driving License</p></center></div></a></div>
	
</body>
</html>
