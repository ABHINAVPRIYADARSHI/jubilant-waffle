<?php
require("session_status.php");
extract($_POST);
?>
<!DOCTYPE HTML> 
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!--<link href="quiz.css" rel="stylesheet" type="text/css">-->
</head>

<body>
<?php
$loginid=$_SESSION['alogin'];
$rs=mysqli_query($conn,"select * from $table1 where client_mob_number='$client_mob_number'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1> Client  Already Exists</div>";
	exit;
}
$query="insert into $table1(staff_id,client_id,client_name,client_mob_number,visit) values('$loginid',DEFAULT,'$client_name','$client_mob_number','$visit')";

$rs=mysqli_query($conn,$query)or die("Error:".mysqli_error($conn)."(query was $query)");
echo "Successfully inserted";

?>
</body>
</html>
