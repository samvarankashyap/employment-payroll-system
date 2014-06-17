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
echo "$value<br>";

$sql="SELECT * FROM $tbl_name where firstname like '$value'";
$result=mysql_query($sql);


echo "<table border='1'>";

while($row = mysql_fetch_row($result) )
{
echo "<tr><td>$row[0]</td></tr>";
echo "<tr><td>$row[1]</td></tr>";
echo "<tr><td>$row[2]</td></tr>";
echo "<tr><td>$row[3]</td></tr>";
echo "<tr><td>$row[4]</td></tr>";
echo "<tr><td>$row[5]</td></tr>";
echo "<tr><td>$row[6]</td></tr>";
echo "<tr><td>$row[7]</td></tr>";
echo "<tr><td>$row[8]</td></tr>";
echo "<tr><td>$row[9]</td></tr>";
echo "<tr><td>$row[10]</td></tr>";
echo "<tr><td>$row[11]</td></tr>";
echo "<tr><td>$row[12]</td></tr>";
echo "<tr><td>$row[13]</td></tr>";
echo "<tr><td>$row[14]</td></tr>";
echo "<tr><td>$row[15]</td></tr>";
echo "<tr><td>$row[16]</td></tr>";
echo "<tr><td>$row[17]</td></tr>";
echo "<tr><td>$row[18]</td></tr>";
echo "<tr><td>$row[19]</td></tr>";
echo "<tr><td>$row[20]</td></tr>";
echo "<tr><td>$row[21]</td></tr>";
echo "<tr><td>$row[22]</td></tr>";
echo "<tr><td>$row[23]</td></tr>";
echo "<tr><td>$row[24]</td></tr>";
echo "<tr><td>$row[25]</td></tr>";
echo "<tr><td>$row[26]</td></tr>";
echo "<tr><td>$row[27]</td></tr>";
echo "<tr><td>$row[28]</td></tr>";
echo "<tr><td>$row[29]</td></tr>";
echo "<tr><td>$row[30]</td></tr>";
echo "<tr><td>$row[31]</td></tr>";
echo "<tr><td>$row[32]</td></tr>";
echo "<tr><td>$row[33]</td></tr>";
}

echo "</table>";

?>
