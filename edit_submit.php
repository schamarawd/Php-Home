<?php
	$uid=$_POST["uid"];
	$username=$_POST["un"];
	$password=$_POST["pw"];
	$country=$_POST["coun"];
	$gender=$_POST["gen"];
	$agree=$_POST["agree"];
	
	$con= new mysqli("localhost","sandun","ChaMaRa4424","wideawake");
	
	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	else{
		
		echo("Connected .....");
	}
	
	$sql = "update user_info set username='$username',
	password='$password',gender='$gender',country='$country' where uid='$uid'";

	 //run the query
	

	
	
	
	if ( $con->query($sql) === TRUE) {
		echo "Record updated successfully";
	} 
	else {
		echo "Error: ". "<br>" . $con->error;
	}

		$con->close();
	
	
	
?>