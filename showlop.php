<html>
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>
<body>


<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="lossofpay"; // Table name 

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

echo "<table border='1'>";
echo "<tr><td>Id</td><td>Surname</td><td>Firstname</td><td>Middlename</td><td>Date</td><td>Value</td><td>Reason</td></tr>";;

while($row = mysql_fetch_row($result))
{
echo "<tr>";

echo "<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td> ";

echo "</tr>";
}
echo "</table>";
echo "<a href='addlop.php'> Back</a>";
//echo "$result[0]";
 mysql_close($con);
?>


</body>
</html>
