<?php
session_start();
error_reporting(1);
//extract($_POST);
include("dbconfig.php");
echo "Welcome ".$_SESSION['alogin'];

    echo"<a href='login.php'><button style='float: right;'>Home</button></a><BR/><BR/>";
    echo"<a href='logout.php'><button style='float:right;'>Log Out</button></a><BR/><BR>";
echo "<BR>";

if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}?>