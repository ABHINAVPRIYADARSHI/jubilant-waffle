<?php
require("session_status.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Search database</title>
<style>
body {background-color: lightpink;}
h1   {color: orangered;
	text-align:centre;}


</style>
</head>
<body>

	<h1>!!! Search into database !!! </h1>
 	<form method="post" action="searches.php">
	
	<!--//<input type="text" name="staff_id" placeholder="search by staff id">-->
	<input type="text" name="client_name" placeholder="search by Client Name">
	<input type="text" name="client_mob_number" placeholder="Search by Mobile No">
	
	<input type="text" name="visit" placeholder="search by Date"><br><br>
	<input type="submit" value="Go">
	<input type="reset" value="Reset">
	
	</form>
	
</body>
</html>
