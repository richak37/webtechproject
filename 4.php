<?php
$conn = mysqli_connect("localhost","root","","business");

if($conn)
	
	{
		echo "Successfully connected to the server. ";
	}
	
	else 
	{
		echo"connection to server failed";
		exit();
	}
	
 $q1 = "insert into phone(ph_id, ph_brand, ph_color) values('96', 'samsung', 'blue')";
 $r1 = mysqli_query($conn,$q1);
 
 if($r1)
	 echo"<br> data inserted successfully";
 else 
	 echo"<br> error";
 
 mysqli_close($conn);
 
 ?>