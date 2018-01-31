<?php
require("session_status.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert Entry</title>
<style>
body{
	background-color:orangered;
}
h1   {color: orangered;
	text-align:centre;}

</style>

<script language="javascript">
function check()
{
 if(document.form1.client_mob_number.length()<10)
  {
    alert("Plese Enter Mobile number");
	document.form1.mobile.focus();
	return false;
  }
 return true;
}
 </script>
</head>
<body>

	<h1>!!! Insert into database !!! </h1>
 	<form name=form1 method="post" action="insert.php" onSubmit="return check();">
	
	Client Name<input type="text" name="client_name" placeholder="Enter Name" autofocus required>
	Mobile No<input type="text" name="client_mob_number" placeholder="Enter contact number" required>
	
	Date<input type="date" name="visit"  required><br><br>
	
	<input type="submit" value="Go">
	<input type="reset" value="Reset">
	
	</form>
	
</body>
</html>

