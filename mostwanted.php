
<!DOCTYPE html>
<html>
<head>
	<title>motwanted</title><meta name="viewport" content="width=device-width, initial-scale=1">
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



		th,td,table{
			border:1px solid black;border-collapse: collapse; 
			background-color: green;
		}
		body{
			background-color: #105361;
		}
		#t{
			background-color: #bf1515;
		}
		th{
			background-color: #bf1515;
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
			color: white;
		}
		li{
			list-style-type: none;}


     
       #img1{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : relative;
           left :30px;
           }
     
     
     #img2{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : relative;
           top :-308px;
           left :320px;
           }

    #img3{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : relative;
           top : -615px;
           left : 600px;
           }
    #img4{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : relative;
           top :-922px;
           left :900px;
           }

    #img5{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : absolute;
           top :400px;
           left :27px;
           }

    #img6{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : absolute;
           top :400px;
           left :320px;
           }

    #img7{
           display :block;
           border : 1px solid black;
           background :#f1f1f1;
           position : absolute;
           top :400px;
           left :600px;
           }

          
     
     
     
     
     
     
     
     
     
     
     
		 
	</style>
</head>
<body oncontextmenu="return false;">
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















	<div id="ma" style="display: inline-block;position: relative;left: 10px;bottom: 0px;">
	  	<h2 ><span style="background-color: #fc720f">Most Wanted</span></h2>
    	
    	<figure id="img1">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	Most Wanted 1 vill/town ps<br>
    	dist state PIN
    	</caption>
    	</figure>

    	<figure id="img2">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	Most Wanted 2 vill/town ps<br>
    	dist state PIN
    	</caption>
    	</figure>
    	
    <figure id="img3">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	Most Wanted 3 vill/town ps<br>
    	dist state PIN
    	</caption>
    	</figure>

    	<figure id="img4">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	Most Wanted 4 vill/town ps<br>
    	dist state PIN
    	</caption>
    	</figure>

    	<figure id="img5">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	vill/town ps<br>
    	Most Wanted 5 dist state PIN
    	</caption>
    	</figure>

    	
    	<figure id="img6">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	vill/town ps<br>
    	Most Wanted 6 dist state PIN
    	</caption>
    	</figure>

    	<figure id="img7">
    	<img src="mostwanted2.png" width="200" height="250" alt="img"><br>
    	<caption> 
    	Most Wanted 7 vill/town ps<br>
    	dist state PIN
    	</caption>
    	</figure>


		
</div>
	
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
	</div><marquee direction="right"><a href="help.php" style="color: white;text-decoration: none;">Issues In Website?Click here</a></marquee >
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
</html>
