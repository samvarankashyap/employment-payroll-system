<?php
/* 

Display the current month :D

checks system time for the current month and 
searches all the tables in the payslip database 
if the table name of current month is already present then 
display cannot generate the payslip already existing 
else 
creates table with the name of current month and year
like feb2013 
generates all the payslips 
inserts them into it......
 */
 echo date('MY'); 
$date= date('MY');
 echo "Current date is $date";

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$date."'"))==1) 
{
  echo "payslip Table for $date already exists ";
  
}
  else
{
  echo "Table does not exist"; 

echo "<br>creatingg table<br>";


//$sql2="CREATE TABLE $date (surname VARCHAR(50), firstname varchar(50), middlename VARCHAR(50), da INT, 
 //hra INT, gross INT, payscale VARCHAR(30), pf INT, allowance INT, basic INT)";

$sql2="CREATE TABLE $date
  AS (SELECT id, surname, firstname, middlename, da, hra, gross, payscale, pf, allowance, basic
      FROM empdetails
      )"; 
 
 
mysql_query($sql2); 

}







//$date="lossofpay";
echo "$date";
if( TableExists($date, $db_name))
{
echo "<br>Payslip Table already exists";
}
//else 
//{
//echo "<br>creatingg table<br>";


//$sql2="CREATE TABLE $date (surname VARCHAR(50), firstname varchar(50), middlename VARCHAR(50), da INT, 
// hra INT, gross INT, payscale VARCHAR(30), pf INT, allowance INT, basic INT)";
//mysql_query($sql2); 











//}

?>


<?php

function TableExists($tablename, $db) {
    
    // Get a list of tables contained within the database.
    $sql = "SHOW TABLES FROM $db";
$result = mysql_query($sql);
	
	//$result = mysql_list_tables($db);
    $rcount = mysql_num_rows($result);

    // Check each in list for a match.
    for ($i=0;$i<$rcount;$i++) {
        if (mysql_tablename($result, $i)==$tablename) return true;
    }
    return false;
}

 
 
 ?>




 
