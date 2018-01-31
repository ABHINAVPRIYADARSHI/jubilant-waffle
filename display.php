<?php
require("session_status.php");
extract($_POST);
?>
<!DOCTYPE HTML> 
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>
table {

    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 75%;
    
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>
<?php
$query="";
$query1="";
$query2="";
   
    if ($from_date)  
    {  
        $query1 = " and visit >='$from_date' ";  
    }  
    if ($to_date)   
    {  
        $query2 = " and visit <= '$to_date'";  
    }  
    
$loginid=$_SESSION['alogin'];
$query="Select * from $table1 where staff_id='$loginid' $query1 $query2 ";

$rs=mysqli_query($conn,$query);
if (mysqli_num_rows($rs)>0)
{ 
  ?>
  <table >
  <caption>ALL SEARCHES</caption>
  <tr>
    <th>STAFF ID</th>
    <th>CLIENT ID</th>
    <th>NAME</th> 
    <th>MOBILE NUMBER</th>
    <th>VISIT DATE</th>
  </tr>
  <?php
  while($row = mysqli_fetch_row($rs)) {
    ?>
  <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
  </tr>
  <?php         
    }
  ?>
</table>

<?php
}
else{
    echo "No match found";
}

?>
</body>
</html>
