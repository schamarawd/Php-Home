<!DOCTYPE html>
<html>
<style>
input[type=text], select ,input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit],input[type=reset] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#v{
    width: 50%;
    background-color: #FF0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
	width: 50%;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<h2>BIT</h2>
<h3>Submit User Data</h3>

<div>
  <form action="submit.php" method="post" autocomplete="off">
    <label for="fname">User Name&nbsp;&nbsp;</label>
    <input type="text" id="fname" name="un" placeholder="Your name..">

	<BR>
    <label for="lname">Password&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="password" id="lname" name="pw" placeholder="Your Password..">

	<BR>
    <label for="country">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select id="country" name="coun">
        <option value="srilanka"<?php echo ($_GLOBALS['s1']);?>>Sri lanka</option>
        <option value="india" <?php echo ($_GLOBALS['s2']);?>>India</option>
        <option value="australia"<?php echo ($_GLOBALS['s3']);?>>Australiya</option>
        <option value="canada" <?php echo ($_GLOBALS['s4']);?>>Canada</option>
        <option value="japan" <?php echo ($_GLOBALS['s5']);?>>Japan</option>
    </select>
  
	<BR>
	<label for="lname">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="radio" checked name="gen" value='M'<?php echo ($_GLOBALS['g1']);?>> M <input type="radio" name="gen" value='F'<?php echo ($_GLOBALS['g2']);?>> F
	
	<br><br>
	
	<label for="lname">Iagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="checkbox" name="agree"> Yes
	<BR>
    <input type="submit" value="Submit">
	<input type="reset" value="Reset">
  </form>
  <form action="view.php">
  <input type="submit" value="View Data" id="v">
  </form> 
</div>

</body>
</html>
