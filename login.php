<?php
session_start();
error_reporting(1);
extract($_POST);
if(isset($submit))
{
	include("dbconfig.php");
	$loginquery="select * from staff_login_info where loginid='$loginid'and password='$pass'";
	
	
	$rs=mysqli_query($conn,$loginquery) or die(mysql_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
	}
	$_SESSION['alogin']=$loginid;
	echo $_SESSION['alogin'];
}

 if(!isset($_SESSION['alogin']))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
echo $_SESSION['alogin'];

?>

<!DOCTYPE HTML>
<html>
<head>
<title>login page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left;">
	<div style="margin-left:20%;padding-top:5%">
        <a href="insertfile.php"><button>INSERT</button></a><BR/><BR/>
		<a href="UpdateFile.html" ><button>UPDATE  </button></a><BR/><BR/>
		<a href="deletefile.php"><button>DELETE </button></a><BR/><BR/>
		<a href="displayfile.php"><button>DISPLAY</button></a><BR/><BR/>
		<a href='searchfile.php'><button>SEARCH </button></a><BR/><BR/>
		<a href='logout.php'><button> LOG OUT</button></a><br/>
		
	</div>
</div>

</body>
</html>
