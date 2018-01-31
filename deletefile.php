<?php
require("session_status.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Delete Entry Page</title>

<style>
body {background-color: lime;}
h1   {color: orangered;}
</style>

<script language="javascript">
function check()
{
	if(document.form1.mobile.value=="")
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
	<h1>!!! Delete from database !!! </h1>
	<a href="searchfile.php"><button>SEARCH</button></a><BR/><BR/>

	<form name="form1" method="post" action="delete.php" onSubmit="return check();">
	
	Enter Mobile No<input type="text" name="mobile" autofocus required>
	<input type="submit" value="Delete">
	
	</form>

</body>
</html>