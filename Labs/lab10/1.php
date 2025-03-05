<?php
	$con=mysqli_connect("localhost","root","","Darshan_122");
	if($con)
	{
		echo "connection successfully <br>";
		$query="CREATE TABLE Account
			 (AccountNumber INT AUTO_INCREMENT PRIMARY KEY,
			  Balance DECIMAL(10,2) NOT NULL,
			  Branch VARCHAR(50) NOT NULL);";
		$sql=mysqli_query($con,$query);
		if($sql)
		{
			echo "table created successfully..!!";
		}
	}
?>