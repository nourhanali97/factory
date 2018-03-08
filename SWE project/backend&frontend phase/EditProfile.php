
<?php
session_start();
require 'DB.php';
$data = new Databasess;

if(isset($_POST['submit']))
{	$tableName='user';
	$data->update($tableName,$_POST['FristName'],$_POST['LastName'],$_POST['Mobile'],$_POST['Age'],$_POST['WorkHours'],$_POST['Address']);
	// print_r($x);

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css1.css">
</head>
<script type="text/javascript"> 
function redirect()
{
location.href="EditProfile.html";
};
</script>
<body>
<div id="mybar">
  <a href="SignIn.php" id="SignIn">SignIn</a>
  <a href="User.php" id="SignUp">ADDUSER</a>
  <a href="profile.php" id="profile">Profile</a>	
  <a href="EditProfile.php" id="EditProfile">Profile Edit</a>
  <a href="Order.php" id="Order">Order</a>
  <a href="StoreRoom.php" id="StoreRoom">Store Room</a>
  <a href="resources.php" id="resources">Resources</a>
  <a href="deliver.php" id="deliver">Deliver</a>
  <a href="attendence.php" id="attendence">Attendence</a>
  <a href="delete.php" id="delete">Delete</a>
  <a href="workerstable.php" id="workerstable">Worker Table</a>
  <a href="ProfitDeduction.php" id="PD">Profit Deduction</a>
</div>
<form id="PRO">
<h1><b>Edit Profile</h1> 
<fieldset>
<legend>Worker Information</legend>
<b>ID: </b>
<input type "text" name= "ID" id= "ID">
</br>
<b>FristName:</b>
<input type "text" name= "Name" id= "Employee Name">
</br>
<b>LastName:</b>
<input type "text" name= "Name" id= "Employee Name">
</br>
<b>Mobile Number: </b>
<input type= "text" name= "mobile number" id= "mobile number"  >
</br>
<b>Age: </b>
<input type "text" name= "Age" id="Age">
</br>
<b>Work Hours: </b>
<input type "text" name= "hours" id="Address">
</br>
<b>Address: </b>
<input type "text" name= "Address" id="Address">
</br>
<b>Worker Position: </b>
<input type "text" name= "position" id="Address">
</br>
<button type="button" id="edit" onclick="redirect()">Edit</button>
</fieldset>
</form>
</html>