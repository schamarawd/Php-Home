<?php
	$uid=$_POST["uiid"];
	$con= new mysqli("localhost","sandun","ChaMaRa4424","wideawake");
	
	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	else{
		
		echo("Connected .....");
	}
	
	$sql = " delete from user_info where uid='$uid'";

	 //run the query
	

	
	
	
	if ( $con->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} 
	else {
		echo "Error: ". "<br>" . $con->error;
	}

		$con->close();
	
	
	
?>