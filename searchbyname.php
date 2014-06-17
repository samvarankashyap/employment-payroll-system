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
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$value=$_GET['name'];

$sql="SELECT * FROM $tbl_name where firstname like '$value'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

echo "<table border='1'>";
echo "<tr><td>Id</td><td>Title</td><td>Surname</td><td>Firstname</td><td>Middlename</td><td>Gender</td><td>Fathername</td><td>Mothername</td><td>DateofBirth</td><td>Address</td><td>Postalcode</td></tr>";

while($row = mysql_fetch_row($result))
{
echo "<tr>";
echo "<form name=$row[0] method='post' action='showindi.php?val=$row[0]'>";
echo "<td>$row[0]</td> <td> $row[1]</td> <td> $row[2]</td><td> $row[3]</td><td> $row[4]</td><td> $row[5]</td><td> $row[6]</td><td> $row[7]</td><td> $row[8]</td><td> $row[9]</td><td> $row[10]";
echo "<td><a href='updateform1.php?val=$row[0]'>update info</a></td>";
echo "<td><input type='submit' value='show'></td>";
echo "</form>";
echo "</tr>";
}
echo "</table>";
echo "<a href='admin.php'> Back</a>";
//echo "$result[0]";
 mysql_close($con);
?>



<?php
echo "</body>
</html>";
?>
