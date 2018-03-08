<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css1.css">
    </head>
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
<div id="ORD">
	<fieldset>
	<legend>Order</legend>
        <form >
		
               
                
				
				<b>Price:</b>
                <input type="text" name="price" required>
				<br>
				
               
				<b>Order Date:</b>
                <input type="text" name="orderdate" required>
				<br>
				
				
				<b>Payment Type:</b>
                <input type="text" name="Type" required>
				<br>
				<br>
                <button name="submit" type="submit"  onclick="return emptyfield();">Done</button>



        </form>
</fieldset>
<fieldset>
	<legend>Client Information</legend>
        <form >
		
                <b>Client Name:</b> 
                <input type="text" name="name" required>
				<br>
				
				<b>Client Address:</b> 
                <input type="text" name="address" required>
				<br>
				
                <b>Mobile:</b> 
                <input type="text" name="mobile" required>
				<br>
              
				<br>
				<br>
                <button name="submit" type="submit"  >Done</button>



        </form>
</fieldset>
<fieldset>
	<legend>Order Details</legend>
        <form >
		
               <b>Unit:</b> 
                <input type="text" name="unit" required>
				<br>
				
                <b>Quantity:</b> 
                <input type="text" name="quantity" required>
				<br>
				
              
				<br>
				<br>
                <button name="submit" type="submit"  >Done</button>



        </form>
</fieldset>
<fieldset>
	<legend>Product </legend>
        <form >
		 <b>Product Name:</b> 
                <input type="text" name="name" required>
				<br>
				
				<b>Product Size:</b> 
                <input type="text" name="size" required>
				<br>
				
              
				<br>
				<br>
                <button name="submit" type="submit"  >Done</button>



        </form>
</fieldset>
<div>
    </body>
</html>