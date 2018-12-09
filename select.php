
<html>
<body>
<form action="submit.php">
<?php

	echo("<b>Day</b>");
	echo("<select required>");
	echo("<option value=''> Select Day </option>");
	for($x=1;$x<32;$x++){
		echo("<option>".$x."</option>");
	}
	echo("</select>");
	
?>
<br>
<input type="submit" value="OK">
</form>
</body>
</html>