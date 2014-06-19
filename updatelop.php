<html>
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>
<body>


<form  name="lopf" method = "post" action="" >
Value of loss of pay:<br><input type="text" name="lop"><br>
Date of leave :<br><input type="text" name="date"><br>
Reason of leave:<br><textarea rows=10 cols=30 name="reason"></textarea><br>
<input type="submit" value="addlop" name="submit">
</form>


<?php
if (isset($_POST['submit']))
{
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$value=$_GET['val'];//this is id 
//echo "$value";


$sql="SELECT * FROM $tbl_name where id=$value";
$result=mysql_query($sql);
$id="";
$firstname="";
$middlename="";
$surname="";
$lop=$_POST['lop'];
$date=$_POST['date'];
$reason=$_POST['reason'];
while($row = mysql_fetch_row($result) )
{
$id.=$row[0];
$firstname .=$row[2];
$middlename.=$row[3];
$surname.=$row[4];

}

$sql1= "INSERT INTO  test.lossofpay (
id ,
firstname ,
middlename ,
surname ,
date ,
val,
reason)
VALUES (
'$id', '$firstname', '$middlename', '$surname', '$date', '$lop', '$reason')";

if(mysql_query($sql1))
{
echo "update sucessfull";

   header( 'Location: addlop1.php?f=1' ) ;
}
else 
{
echo "error in updating";
}

//echo "$result[0]";

mysql_close($con);


}

else 
{
echo "please enter the value of loss of pay and its date ";
}

?>





</body>
</html>
