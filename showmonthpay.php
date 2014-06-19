
<?php

$month=$_GET['month'];
echo $month;



$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 
$name="";

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select "."$month".".surname, "."$month".".firstname ,"."$month".".middlename ,"."$month".".da , "."$month".".hra , "."$month".".gross , "."$month".".payscale , "."$month".".pf , "."$month".".allowance , "."$month".".basic , lossofpay.val from "."$month".", lossofpay where "."$month".".id = lossofpay.id";

$result=mysql_query($sql,$con);

echo "
<table border='1'>
<tr><td>Surname</td><td>Firstname</td><td>Middlename</td><td>DA</td><td>HRA</td><td>Gross</td><td>PayScale</td><td>PF</td><td>Allowance</td><td>Basic</td><td>LossOfPay</td></tr>
";



while($row = mysql_fetch_row($result))
{
echo "<tr><td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[9]."</td>";
 echo "<td>".$row[10]."</td></tr>";

}


echo "
</table>
";



/*
$sql="SELECT id, surname, firstname, middlename, da, hra, gross, payscale, pf, allowance, basic FROM $tbl_name";

$result=mysql_query($sql,$con);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

//echo $result;


while($row = mysql_fetch_array($result))
{
echo $row['id']."<br>";
echo $row['surname']."<br>";
echo $row['firstname']."<br>";
echo $row['middlename']."<br>";
echo $row['da']."<br>";
echo $row['hra']."<br>";
echo $row['gross']."<br>";
echo $row['payscale']."<br>";
echo $row['pf']."<br>";
echo $row['allowance']."<br>";
echo $row['basic']."<br>";
}

$sql1="SELECT * FROM lossofpay";
$result1=mysql_query($sql,$con);

while($row1 = mysql_fetch_array($result1))
{
echo $row1['name']."<br>";
echo $row1['date']."<br>";
echo $row1['val']."<br>";
echo $row1['reason']."<br>";
}








//print_r ($row);

*/

mysql_close($con);
?>




fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>fsgfdxfxgcncncccg<br>




