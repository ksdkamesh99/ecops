<?php 
session_start();
if(isset($_SESSION['user'])){
  
}
else{
  header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html>
<title> apointment</title>
<head> 
<style>
  div{
       position : relative;
       top :20px;
       left : 100px;
       width :800px;
       height : 240px;
       
       }
</style>
</head>

<body oncontextmenu="return false;">
<div>
<form action="xyz.php" method="post" >
<fieldset>
<legend>appointments and transfer</legend>
<bold>Name : </bold> <input type="text" name="fname" placeholder="first name" >  <input type="text" name="lname" placeholder="last name"><br>
<bold>Service :</bold><select name="services">
    <option value="ASI"/>ASI </option>
    <option value="Constable"/> Constable</option>
    <option value="DSP"/>DSP</option>
    <option value="Inspector"/>Inspector </option>
    <option value="Head Constable"/>Head Constable </option>
    <option value="Senior Constable"/>Senior Constable </option>
    <option value="Sub-Inspector"/>Sub-Inspector </option>
  </select><br>
<bold>Id NO :</bold> <input type="text"  name="id_no"><br>
Appointment<input type="radio"  name="action" value="appointment">Transfer<input type="radio"  name="action" value="transfer"><br>
<bold>From : </bold> <select name="to">  
        <option value="Araria"  selected>Araria</option>
        <option value="Arwal">Arwal</option>
        <option value="Arrah">Arrah</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Banka">Banka</option>
        <option value="Begusarai">Begusarai</option>
        <option value="Bhagalpur">Bhagalpur</option>
        <option value="Buxar">Buxar</option>
        <option value="Darbhanga">Darbhanga</option>
        <option value="Champaran">Champaran</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Katihar">Katihar</option>
         <option value="Motihari">Motihari</option>
        
        <option value="Nalanda">Nalanda </option>
        <option value="Patna">Patna</option>
        <option value="Rohtas">Rohtas</option>
        <option value="Saran">Saran</option>
        </select> 
<bold>From : </bold><select name="to"> 
      <option value="Araria"  selected>Araria</option>
        <option value="Arwal">Arwal</option>
        <option value="Arrah">Arrah</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Banka">Banka</option>
        <option value="Begusarai">Begusarai</option>
        <option value="Bhagalpur">Bhagalpur</option>
        <option value="Buxar">Buxar</option>
        <option value="Darbhanga">Darbhanga</option>
        <option value="Champaran">Champaran</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Katihar">Katihar</option>
         <option value="Motihari">Motihari</option>
        
        <option value="Nalanda">Nalanda </option>
        <option value="Patna">Patna</option>
        <option value="Rohtas">Rohtas</option>
        <option value="Saran">Saran</option>
        </select><br>
<bold>Input required files : </bold><input type="file" name="details" value="details">   <input type="submit">  <br>
<bold>Comments :</bold> <textarea rows="1" cols="50" >  </textarea>

 
</fieldset> 
</form>
</div>
</body>
</html>


