<?php
include('connection.php');

//collect the passed id
$id = $_GET['pol'];

//run a query 

$query = "SELECT ps FROM users WHERE dist='$id' GROUP BY ps ORDER BY ps ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $desig1= '<option value="'.$row["ps"].'">'.$row["ps"].'</option>';
 echo $desig1;
}
//loop through all returned rows

?>