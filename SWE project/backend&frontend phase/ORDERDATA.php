


<?php
class Databasess{
	public $conn;
	 public $email;
	 
	 
    public function __construct()
	{		
		$this->conn = mysqli_connect("localhost", "root" ,"", "factoryy");
	if(mysqli_connect_errno())
	{
		echo 'Database connection Error ' .mysqli_connect_error();
	}
	else 
	{
		echo 'database is connected';
	}
	}

	public function order ($table_name,$Price,$DeliverDate,$PaymentMethod)
	{  
	$string = "INSERT INTO " .$table_name. "(Price,DeliverDate,PaymentMethod) VALUES ('" .$Price. "','" .$DeliverDate."','".$PaymentMethod."')";
		
	if(mysqli_query($this->conn,$string))
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}	
	public function orderdetails ($table_name,$Unit,$Quantity)
	{  
	$string = "INSERT INTO " .$table_name. "(Unit,Quantity) VALUES ('" .$Unit. "','" .$Quantity."')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}	
		public function Product($table_name,$ProductName,$ProductSize)
	{  
	$string = "INSERT INTO " .$table_name. "(ProductName,ProductSize) VALUES ('" .$ProductName. "','" .$ProductSize."')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}
		public function deleteeorder($ID, $table) 
    { 
        $query = "DELETE FROM ".$table." WHERE ID = '$ID'";
	  
		$result = $this->conn->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $ID . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
	public function update($table,$Order)
	    {
	    //$Email=$_COOKIE["Email"];
		$string = "UPDATE ".$table." SET Order ='$Order' ";
		$result = $this->conn->query($string);

		if($result != false)
		{
			echo "Updated Done";
			}
	    else
		{
			echo "error";
	        }
	    }
}
?>