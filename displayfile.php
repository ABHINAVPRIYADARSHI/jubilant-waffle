<?php
require("session_status.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Display Entry</title>
<style>
body {background-color: lightpink;}
h1   {color: orangered;
	text-align:centre;}


</style>
</head>
<body>
	<h1>!!! Display  database !!! </h1>
 	<form method="post" action="display.php">
	From date<input type="date" name="from_date" >
	To date<input type="date" name="to_date" ><br><br>
	
	<input type="submit" value="Go">
	<input type="reset" value="Reset">
	
	</form>
	
</body>
</html>

