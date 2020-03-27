<?php 
require_once('connection.php');
if(isset($_POST['subm'])){
	$sql = "INSERT INTO complaints (subject,date_com,time_com,text_complaint,name,phone,email,address,pincode,city)
VALUES (' ".$_POST['sub']."', ' ".$_POST['date']."',' ".$_POST['time']."',' ".$_POST['com']."',' ".$_POST['name']."',' ".$_POST['phone']."',' ".$_POST['email']."',' ".$_POST['add']."',' ".$_POST['pin']."',' ".$_POST['city']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" ;
}


}
 ?>
