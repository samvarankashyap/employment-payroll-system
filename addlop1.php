
<html>
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>
<body>


<?php
if(isset($_GET['f']))
{
$f=$_GET['f'];
if($f==1)
{
echo "Update Sucessful";
}
}


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

echo "<table border='1'>";
echo "<tr><td>Id</td><td>Title</td><td>Surname</td><td>Firstname</td><td>Middlename</td><td>DA</td><td>HRA</td><td>Gross</td><td>payscale</td><td>pf</td><td>Allowance</td><td>Basic</td></tr>";

while($row = mysql_fetch_row($result))
{
echo "<tr>";
echo "<form name=$row[0] method='post' action='updatelop.php?val=$row[0]'>";
echo "<td>$row[0]</td><td>$row[1]</td> <td> $row[2]</td><td> $row[3]</td><td> $row[4]</td><td> $row[30]</td><td> $row[33]</td><td>$row[34]</td><td> $row[35]</td><td>$row[36]</td><td>$row[37]</td><td>$row[62]</td>";

echo "<td><input type='submit' value='+'></td>";
echo "</form>";
echo "</tr>";
}
echo "</table>";
echo "<a href='addlop.php'> Back</a>";
//echo "$result[0]";
 mysql_close($con);
?>


<?php
echo "</body>
</html>";
?>
