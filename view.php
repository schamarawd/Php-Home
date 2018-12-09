 <?php

// Create connection
$conn= new mysqli("localhost","sandun","ChaMaRa4424","wideawake");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from user_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo ("<table border=1>");
	echo ("<tr><th>User Name</th><th>Password</th><th>Gender</th><th>Country</th></tr>");
    while($row = $result->fetch_array()) {
        echo ("<tr><td><a href=edit.php?val=".$row[4].">".$row[0]."</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
    }
	echo ("</table>");
} else {
    echo "0 results";
}
$conn->close();
?> 