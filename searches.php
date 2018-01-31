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
    width: 100%;
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
<body>
<?php
$query="";
$query1="";
$query2="";
$query3="";

    if ($client_name)  
    {  
        $query1 = " and client_name like '%$client_name%' ";  
    }  
    if ($client_mob_number)  
    {  
        $query2 = " and client_mob_number like '%$client_mob_number%' ";  
    }  
    if ($visit)   
    {  
        $query3 = " and visit like '%$visit%'";  
    }  
  

$loginid=$_SESSION['alogin'];
$query="Select * from $table1 where staff_id='$loginid' $query1 $query2 $query3";


$rs=mysqli_query($conn,$query);
if (mysqli_num_rows($rs)>0)
{ 
  ?>
  <table style="width:90%">
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