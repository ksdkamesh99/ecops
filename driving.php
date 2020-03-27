<?php 
include('connection.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Driving licence</title><meta name="viewport" content="width=device-width, initial-scale=1">
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
<div style="background-image: url('driving.jpg');background-size: cover;">





<?php 

if(isset($_POST['subm'])){
	$sql = "INSERT INTO driving (name,phone,email,address,pincode,city,date_com,reason)
VALUES (' ".$_POST['nam']."',' ".$_POST['phone']."',' ".$_POST['email']."',' ".$_POST['add']."',' ".$_POST['pin']."',' ".$_POST['city']."', ' ".$_POST['date']."',' ".$_POST['reason']." ')";
    $result = mysqli_query($con,$sql);
    $email=$_POST['email'];
    $name=$_POST['nam'];

   


    
$url="https://www.way2sms.com/api/v1/sendCampaign";
$mess="Hi There,Thanks FOr Choosing Ecops,your Driving License Form is successfully received  your driving License form no is and we Will come to contact u soon";
$pho=$_POST['phone'];
$message = urlencode($mess);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=RAGBW6GTUB82X6FROVV1TG7XFXR9Q9X7&secret=2VPXFJ8AXI16ZAJO&usetype=stage&phone=$pho&senderid=ksdkamesh99@gmail.com&message=[$message]");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$results = curl_exec($curl);
curl_close($curl);
require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");
  require("PHPMailer/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->IsSMTP(); // enable SMTP

 // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "ecopsecops8@gmail.com";
    $mail->Password = "ecops12345@";
    $mail->SetFrom("ecopsecops8@gmail.com","ecops");
    $mail->Subject = "Driving License Form Confirmation";
    $mail->Body = "Hello  ".$name."<br><br>Thanks FOr Choosing Ecops,your Driving License Form is successfully received For any Other Queries Feel Free To Contact Us<br><br>With Regards,<br>Ecops<br>
Patna, Bihar (800005), India<br>
Phone: +91-0612-237 1715 / 237 2715<br>
FAX : +91-0612-2670631 , 0612-2660480<br>";
    $mail->AddAddress($email);

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        $ss="success";
     }
if($results){
  $cc="success";
}
else{
  $cc="fail";
}




}
 ?>
 
 
 
 
	<fieldset>
		<legend><center>Driving License</center></legend>
		<form action="driving.php" method="POST">
					<pre ><b>Name:</b>              <input type="text" name="nam"required/></pre>
					<pre ><b>Phone:</b>             <input type="text" name="phone"required/></pre>
					<pre ><b>Email:</b>             <input type="text" name="email"required/></pre>
					<pre><b><p style="position: relative;top: 90px;">Complete Address:</p></b>                   <textarea rows="10" cols="70" name="add"></textarea></pre>
					<pre ><b>PinCode:</b>          <input type="text" name="pin"required/></pre>
					<pre ><b>City:</b>             <input type="text" name="city"required/></pre>
					<br>
          <b>Licence type :</b>
          
          <b>Date :</b> <input type="text" name="date" required/><br>
					<pre><b><p style="position: relative;">Reason For License of Driving:</b></b><textarea rows="10" cols="70" name="reason"></textarea></pre>
          <b>Upload ID and required Documents<input type="file" name="file"><br>
            
					<input type="checkbox" name="check">My information which is submitted is correct<br>
					
					<center><input type="reset" name="rese" value="Reset"><input type="submit" name="subm" value="Submit"></center>



				</form>
	</fieldset>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    var s="<?php echo($cc);  ?>";
    var s1="<?php echo($ss);  ?>";
    if(s=="success" && s1=="success"){
      swal("Successfully Submitted", "A confirmation SMS and Email is sent ", "success");

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
	</div><marquee direction="right"><a href="help.php" style="color: white;text-decoration: none;">Issues In Website?Click here</a></marquee >
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
</html>
