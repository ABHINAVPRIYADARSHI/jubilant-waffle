<?php
    $host = 'localhost';
    $dbname = 'aarya';
    $username = 'root';
    $password = 'p@ssw0rd';
    $table1='market';
  //$table1='market_customers';
    
  //Create connection
	$conn =  mysqli_connect($host,$username,$password,$dbname);
  //mysqli_select_db("market_customers",$conn)  or die("Could not connect to Database");

  //Check connection
	if (mysqli_connect_error()) {
    	die("Connection failed: " );
		} 
        
?>
