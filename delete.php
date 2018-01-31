<?php
require("session_status.php");
extract($_POST);
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

</head>
<body>
<?php
$loginid=$_SESSION['alogin'];
$rs=mysqli_query($conn,"select * from $table1 where staff_id='$loginid' and client_mob_number='$mobile'");
if (mysqli_num_rows($rs)>0)
{
	$query="Delete from $table1 where staff_id='$loginid' and client_mob_number='$mobile'";
	//echo $query;
	$rs1=mysqli_query($conn,$query)or die("Could Not Perform the Query");
	echo "Successfully deleteded";

}
else{
	$query="Delete from $table1 where staff_id='$loginid' and client_mob_number='$mobile'";
	$rs1=mysqli_query($conn,$query)or die("Could Not Perform the Query");
	echo "<br><br><br><div class=head1> No client having mentioned contact number.</div>";
	exit;
}
//echo $query;

?>
</body>
</html>