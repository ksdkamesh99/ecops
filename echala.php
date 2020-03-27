<?php 
include('connection.php'); 
?>
<?php 
  		
  		if(isset($_POST['subm'])){
  			
	$sql = "INSERT INTO  `echalan` (`first`, `last`, `vechileno`, `drivinglicence`, `email`, `phone`, `echalanregno`, `amount`, `paymentno`)
VALUES (' ".$_POST['fname']."',' ".$_POST['lname']."',' ".$_POST['vno']."',' ".$_POST['dno']."',' ".$_POST['email1']."',' ".$_POST['phone1']."', ' ".$_POST['eno']."',' ".$_POST['amount']." ',' ".$_POST['paymentno']." ')";
    $result = mysqli_query($con,$sql);

    
}
   ?>