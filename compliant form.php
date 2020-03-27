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
/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  position: relative;
  left: 350px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #FFF;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.3s;
  animation: animatezoom 0.3s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  0% {transform: scale(0)} 
  
  
   100% {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.container{
	background:white;
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
	
	<div id="d1">
	
	
		<?php 

if(isset($_POST['subm'])){

	$sql = "INSERT INTO complaints (subject,date_com,time_com,text_complaint,name,phone,email,address,pincode,city,ps,aadhar)
VALUES (' ".$_POST['sub']."', ' ".$_POST['date']."',' ".$_POST['time']."',' ".$_POST['com']."',' ".$_POST['nam']."',' ".$_POST['phone']."',' ".$_POST['email']."',' ".$_POST['add']."',' ".$_POST['pin']."',' ".$_POST['city']."',' ".$_POST['ps1']."',' ".$_POST['aa']."')";
    $result = mysqli_query($con,$sql);
    $aaa=$_POST['aa'];
    $email=$_POST['email'];
    $name=$_POST['nam'];

   


    
$url="https://www.way2sms.com/api/v1/sendCampaign";
$mess="Hi There,Thanks FOr Choosing Ecops,your Complaint is successfully received your complaint no is and we Will come to contact u soon";
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
    $mail->Subject = "Complaint Form Confirmation";
    $mail->Body = "Hello  ".$name."<br><br>Thanks FOr Choosing Ecops,your Complaint is successfully received For any Other Queries Feel Free To Contact Us<br><br>With Regards,<br>Ecops<br>
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
				<legend>Complaint Form</legend>
				<p id="pp">Compliant Detail</p>
				<form action="compliant form.php" method=POST>
					<pre ><b>Subject:</b>             <input type="text" name="sub"required/></pre>
					<pre ><b>Date Of Incident:</b>    <input type="text" name="date">**enter in any dd/mm/yyyy format</pre>
					<pre ><b>Time Of Incident:</b>    <input type="text" name="time"required/></pre>
					<pre ><b>near police station the incident took place:</b>   <select name="ps1"><option value="" >-----------------------</option><?php 
						$query = "SELECT ps FROM users GROUP BY ps ORDER BY ps ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $desig= '<option value="'.$row["ps"].'">'.$row["ps"].'</option>';
 echo $desig;
}



					 ?></select></pre>
					<pre><b><p style="position: relative;top: 90px;">Write Complaint:</p></b>                     <textarea name="com" rows="10" cols="100"></textarea></pre>
					
				
				<p id="ppp">Personal Detail</p>
				
					<pre ><b>Name:</b>              <input type="text" name="nam"required/></pre>
					<pre ><b>Phone:</b>             <input type="text" name="phone"required/></pre>
					<pre ><b>Email:</b>             <input type="text" name="email"required/></pre>
					<pre><b>Aadhar No:              <input type="text" name="aa" required></b></pre>
					<pre><b><p style="position: relative;top: 90px;">Complete Address:</p></b>                   <textarea name="add" rows="10" cols="70"></textarea></pre>
					<pre ><b>PinCode:</b>          <input type="text" name="pin"required/></pre>
					<pre ><b>City:</b>             <input type="text" name="city"required/></pre>
					<br><br>
					<input type="checkbox" name="check">My information which is submitted is correct<br>
					
					<center><input type="reset" name="rese" value="Reset"><input type="submit" name="subm" value="Submit" onclick="oncli()"></center>



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

</html>


