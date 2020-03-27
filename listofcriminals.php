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


		}
		#qqq{
			position: relative;
			bottom: 600px;
			left: 200px;
			margin-left: 200px;
			width: 750px;
			height: 0%;
			-webkit-box-shadow: 13px -11px 36px 29px rgba(0,0,0,0.75);
-moz-box-shadow: 13px -11px 36px 29px rgba(0,0,0,0.75);
box-shadow: 13px -11px 36px 29px rgba(0,0,0,0.75);
			

		}

		body{
			background-color: honeydew;
		}
		
		#ii p{
			color: red;
			
			position: relative;
			right: 50px;
			top: 11px;
		}
		input,textarea,select{
			background-color: #CEB00E
		}
		#qqq div:nth-of-type(odd){
      
      position: relative;
      top: 20px;box-shadow: 5px 10px #888888;
      padding: 10px;
      background-color: #E0FFFF;
      left: 30px;
    }

    #qqq div:nth-of-type(even){
      
      position: relative;
      top: 20px;box-shadow: 5px 10px #888888;
      padding: 20px;
      background-color: #FF6347;
      left: 60%;
    }



		
	</style>
</head>
<body oncontextmenu="return false;">

	<div id="q">
		<img src="logo.jpeg" style="padding-left: 20px;padding-top: 5px;" >
		<img src="india.gif" style="height: 90px;position: relative;left: 500px;">
		<a href="logout.php?logout" style="text-decoration: none;color: white;position: relative;left: 71%;bottom: 100%">[Logout]</a>;
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
						$idd=$results['sno'];
						$design=$results['desig'];

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

		<center><h2 style="background: red;">List of  Criminals</h2></center>
		<?php 
			if($desig=="constable" || $desig=="ASI" || $desig=="SI"){

$sql5="SELECT * FROM criminals WHERE (`ps` LIKE '%".$ps."%' )";
      $result = mysqli_query($con,$sql5);
     
        if(mysqli_num_rows($result)>0){
          
          while($results1=mysqli_fetch_array($result)){
            
            echo "<div>Criminal id:  ".$results1['criminal_id']."<hr>"."Name Of Criminal:".$results1['name']."<hr>Disrict:".$results1['dist']."<br>Near Police Station:".$results1['ps']."<hr>Fir No:".$results1['firno']."Date Of Crime Occurance:".$results1['datecrime']."<hr>Address Of Crime Occurance:".$results1['addcrime']."<br>Motive Of Crime:".$results1['motive']."<hr>Witness Name:".$results1['witname']."Witness Address:".$results1['witadd']."<hr>Investigating Officer Name:".$results1['investname']."<br>Designation Of Officer:".$results1['investdesig']."<hr>Investigating Officer Id:<br>".$results1['investid']."<hr>Investigating Officer record date:".$results1['investdate']."</div>";
            echo "<br><br>";echo "<br><br>";
            
            

          }
        }
      }
      else if($desig=="Inspector"){
        $sql3="SELECT * FROM psdata WHERE inceptor_id='".$idd."'";
      $result = mysqli_query($con,$sql3);
      if(mysqli_num_rows($result)>0){
        $noo=1;
          
          while($results1=mysqli_fetch_array($result)){
            
           $psn=$results1['psname'];
          $sql5="SELECT * FROM criminals WHERE (`ps` LIKE '%".$psn."%' )";
      $result4 = mysqli_query($con,$sql5);
      
        if(mysqli_num_rows($result4)>0){
          
          while($results14=mysqli_fetch_array($result4)){
            
            echo "<div>Criminal id:  ".$results14['criminal_id']."<hr>"."Name Of Criminal:".$results14['name']."<hr>Disrict:".$results14['dist']."<br>Near Police Station:".$results14['ps']."<hr>Fir No:".$results14['firno']."<br>Date Of Crime Occurance:".$results14['datecrime']."<hr>Address Of Crime Occurance:".$results14['addcrime']."<br>Motive Of Crime:".$results14['motive']."<hr>Witness Name:".$results14['witname']."<br>Witness Address:".$results14['witadd']."<hr>Investigating Officer Name:".$results14['investname']."<br>Designation Of Officer:".$results14['investdesig']."<hr>Investigating Officer Id:<br>".$results14['investid']."<hr>Investigating Officer record date:".$results14['investdate']."</div>";
            echo "<br><br>";echo "<br><br>";
          }
        }
            

          }
        }
      }
      else if($desig=="DSP"){
         $sql3="SELECT * FROM psdata WHERE dsp_id='".$idd."'";
      $result = mysqli_query($con,$sql3);
      if(mysqli_num_rows($result)>0){
        $noo=1;
          
          while($results1=mysqli_fetch_array($result)){
            
           $psn=$results1['psname'];
          $sql5="SELECT * FROM criminals WHERE (`ps` LIKE '%".$psn."%' )";
      $result4 = mysqli_query($con,$sql5);
      
        if(mysqli_num_rows($result4)>0){
          
          while($results14=mysqli_fetch_array($result4)){
            
            echo "<div>Criminal id:  ".$results14['criminal_id']."<hr>"."Name Of Criminal:".$results14['name']."<hr>Disrict:".$results14['dist']."<br>Near Police Station:".$results14['ps']."<hr>Fir No:".$results14['firno']."<br>Date Of Crime Occurance:".$results14['datecrime']."<hr>Address Of Crime Occurance:".$results14['addcrime']."<br>Motive Of Crime:".$results14['motive']."<hr>Witness Name:".$results14['witname']."<br>Witness Address:".$results14['witadd']."<hr>Investigating Officer Name:".$results14['investname']."<br>Designation Of Officer:".$results14['investdesig']."<hr>Investigating Officer Id:<br>".$results14['investid']."<hr>Investigating Officer record date:".$results14['investdate']."</div>";
            echo "<br><br>";echo "<br><br>";
          }
        }
            

          }
        }
      }

            

            else if($desig=="ACP"){
         $sql3="SELECT * FROM psdata WHERE acp_id='".$idd."'";
      $result = mysqli_query($con,$sql3);
      if(mysqli_num_rows($result)>0){
        $noo=1;
          
          while($results1=mysqli_fetch_array($result)){
            
           $psn=$results1['psname'];
           $sql5="SELECT * FROM criminals WHERE (`ps` LIKE '%".$psn."%' )";
      $result4 = mysqli_query($con,$sql5);
      
        if(mysqli_num_rows($result4)>0){
          
          while($results14=mysqli_fetch_array($result4)){
            
              echo "<div>Criminal id:  ".$results14['criminal_id']."<hr>"."Name Of Criminal:".$results14['name']."<hr>Disrict:".$results14['dist']."<br>Near Police Station:".$results14['ps']."<hr>Fir No:".$results14['firno']."<br>Date Of Crime Occurance:".$results14['datecrime']."<hr>Address Of Crime Occurance:".$results14['addcrime']."<br>Motive Of Crime:".$results14['motive']."<hr>Witness Name:".$results14['witname']."<br>Witness Address:".$results14['witadd']."<hr>Investigating Officer Name:".$results14['investname']."<br>Designation Of Officer:".$results14['investdesig']."<hr>Investigating Officer Id:<br>".$results14['investid']."<hr>Investigating Officer record date:".$results14['investdate']."</div>";
            echo "<br><br>";echo "<br><br>";

          }
        }
            

          }
        }
      }

		 ?>
		
	
		</div>
	
	
</body>
<footer style="position:relative;background-color: black;color: white;top: 1100px;">
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
	

	
</html>
	

