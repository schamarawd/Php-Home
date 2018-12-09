<?php
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
	
	$sql = "insert into user_info(username,password,gender,country) 
	values('$username','$password','$gender','$country')";

	 //run the query
	

	
	
	
	if ( $con->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: ". "<br>" . $con->error;
	}

		$con->close();
	
	
	
?>