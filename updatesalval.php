<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"// Mysql password
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

$array = array(
"id" => $_POST['id'],
//"title" => $_POST['title'],
//"surname" => $_POST['surname'],
//"firstname" =>$_POST['firstname'],
//"middlename" => $_POST['middlename'],
"basic" => $_POST['basic'],
"da" => $_POST['da'],
//"ftorpt" => $_POST['ftorpt'], // full time or part time 
"hra" => $_POST['hra'],
"gross" => $_POST['gross'],
"payscale" => $_POST['payscale'],
"pf" => $_POST['pf'],
"allowance" => $_POST['allowance'],
	);

//print_r($array);
//echo $array['id'];

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



$sql = "UPDATE  test.empdetails  SET da  = '$array[da]', hra  = '$array[hra]',  gross  = '$array[gross]',  payscale  = '$array[payscale]',  pf  = '$array[pf]',  allowance  = '$array[allowance]', basic  = '$array[basic]' WHERE  empdetails . id  = '$array[id]' ";



$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<h1> Update Successful <h1>" ;
echo "<BR>";
echo "<a href='salaries.php'>Back </a>";
}

else {
echo "<h1>ERROR in updating please try again<h1>";
}

?> 

<?php 
// close connection 
mysql_close();


?>
