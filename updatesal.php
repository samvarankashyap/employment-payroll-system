
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>





<?php
$value=$_GET['value'];

//echo "$value";

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name where id=$value";
$result=mysql_query($sql);
$row = mysql_fetch_row($result);


?>


<html>
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>


<body>
<h1>Update Individual Data </h1>
<form name = "form11" action="updatesalval.php" method="post">
<table border='1'>

<tr><td>Id</td><td><?php echo "<input type='text' name='id' value='$row[0]'>"; ?></td></tr>
<tr><td>Title</td><td><?php echo "$row[1]"; ?></td></tr>
<tr><td>Surname</td><td><?php echo "$row[2]"; ?></td></tr>
<tr><td>Firstname</td><td><?php echo "$row[3]"; ?></td></tr>
<tr><td>Middlename</td><td><?php echo "$row[4]"; ?></td></tr>
<tr><td>Basic</td><td><?php echo "<input type='text' name='basic' value='$row[62]'>"; ?></td></tr>
<tr><td>Da</td><td><?php echo "<input type='text' name='da' value='$row[30]'>"; ?></td></tr>
<tr><td>Ft/Pt</td><td><?php echo "$row[31]"; ?></td></tr>
<tr><td>Hra</td><td><?php echo "<input type='text' name='hra' value='$row[33]'>"; ?></td></tr>
<tr><td>Gross</td><td><?php echo "<input type='text' name='gross' value='$row[34]'>"; ?></td></tr>
<tr><td>Payscale</td><td><?php echo "<input type='text' name='payscale' value='$row[35]'>"; ?></td></tr>
<tr><td>Pf</td><td><?php echo "<input type='text' name='pf' value='$row[36]'>"; ?></td></tr>
<tr><td>Allowance</td><td><?php echo "<input type='text' name='allowance' value='$row[37]'>"; ?></td></tr>
<tr ><td colspan="2" align="center"><input type='submit' value='update' ></td></tr>
</table>
</form>
</body>
</html>	
	

