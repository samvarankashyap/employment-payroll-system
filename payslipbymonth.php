<html>
<head>
</head>


<body>
<!--
/*
Display the current month and year 
give a selection box 
for month and year 
on clicking submit 
bisketttttttttt
display all the payslips of that month and year 
Seacrch for the "payslip"  table named with existing month and year  in one field
format : jan2013
if its there it will display all months which are there... 
with a display button beside it 
on clicking the display button 
it will redirect to monthpayslip.php
and displays all the pay slips of that particular month for all employees

*/
-->
<h1>
<?php
echo "Current Date is <br>";
//echo date("d/m/Y") . "<br>";
//echo date("Y.m.d") . "<br>";
echo date("d-m-Y")."<br>";
echo "list of pay slips generated till now <br>";

$date=date("d-m-Y");

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$showtablequery = "
	SHOW TABLES
	FROM
	test
	";
 
$showtablequery_result	= mysql_query($showtablequery);
while($showtablerow = mysql_fetch_array($showtablequery_result))
{ 
    if( $showtablerow[0][3] == "2")
	{
	echo "<a href='showmonthpay.php?month=$showtablerow[0]' target='_blank'>".$showtablerow[0]."</a><br>";
	}
}


/*$sql="SHOW TABLES FROM $db_name LIKE '%2%'";
$result=mysql_query("SHOW TABLES FROM my_database LIKE '%2%'");

while($row = mysql_fetch_row($result))
{
echo "<h4>$row[0]</h4>";
}
*/
?>
</h1>
<h2>Pay Slips generated by Month </h2><h2>
<a href="addnewmonth.php?date=<?php echo"$date"; ?> "> Add new month</a>
</h2>
</body>
</html>
