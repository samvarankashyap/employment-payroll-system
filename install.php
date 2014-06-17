
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql1="CREATE TABLE members(
id INT( 4 ) NOT NULL AUTO_INCREMENT ,
username INT( 20 ) NOT NULL ,
password INT( 20 ) NOT NULL ,
PRIMARY KEY (id)
) ";

$sql2="CREATE TABLE empdetails (
title VARCHAR(5) NOT NULL,
surname VARCHAR(20) NOT NULL,
firstname VARCHAR(20) NOT NULL,
middlename VARCHAR(20) NOT NULL,
gender VARCHAR(6) NOT NULL,
fathername VARCHAR(20) NOT NULL,
mothername VARCHAR(20) NOT NULL,
dob DATE NOT NULL,
address VARCHAR(300) NOT NULL,
postalcode VARCHAR(10) NOT NULL,
city VARCHAR(20) NOT NULL,
state VARCHAR(20) NOT NULL,
religion VARCHAR(20) NOT NULL,
caste VARCHAR(20) NOT NULL,
photo VARCHAR(300) NOT NULL,
lti VARCHAR(5) NOT NULL,
fred DATE NOT NULL,
frjd DATE NOT NULL,
adhaar VARCHAR(20) NOT NULL,
pan VARCHAR(20) NOT NULL,
std VARCHAR(10) NOT NULL,
landline VARCHAR(20) NOT NULL,
mobile VARCHAR(20) NOT NULL,
email VARCHAR(30) NOT NULL,
fax VARCHAR(20) NOT NULL,
designation VARCHAR(20) NOT NULL,
appiontmenttype VARCHAR(20) NOT NULL,
programme VARCHAR(50) NOT NULL,
course VARCHAR(50) NOT NULL,
da INT(5) NOT NULL,
ftorpt VARCHAR(20) NOT NULL,
doj DATE NOT NULL,
hra INT(20) NOT NULL,
gross INT(20) NOT NULL,
payscale VARCHAR(20) NOT NULL,
pf INT(20) NOT NULL,
allowance INT(20) NOT NULL,
qual1 VARCHAR(20) NOT NULL,
yopq1 VARCHAR(20) NOT NULL,
pomq1 VARCHAR(20) NOT NULL,
mosq1 VARCHAR(20) NOT NULL,
noiq1 VARCHAR(20) NOT NULL,
nouq1 VARCHAR(20) NOT NULL,
qual2 VARCHAR(20) NOT NULL,
yopq2 VARCHAR(20) NOT NULL,
pomq2 VARCHAR(20) NOT NULL,
mosq2 VARCHAR(20) NOT NULL,
noiq2 VARCHAR(20) NOT NULL,
nouq2 VARCHAR(20) NOT NULL,
qual3 VARCHAR(20) NOT NULL,
yopq3 VARCHAR(20) NOT NULL,
pomq3 VARCHAR(20) NOT NULL,
mosq3 VARCHAR(20) NOT NULL,
noiq3 VARCHAR(20) NOT NULL,
nouq3 VARCHAR(20) NOT NULL,
te INT(10) NOT NULL,
tte INT(10) NOT NULL,
re INT(10) NOT NULL,
bankac VARCHAR(30) NOT NULL,
patents VARCHAR(500) NOT NULL,
isph VARCHAR(5) NOT NULL,
basic VARCHAR(10) NOT NULL) ";




$sql3="ALTER TABLE `empdetails` CHANGE `id` `id` INT(6) NOT NULL AUTO_INCREMENT, CHANGE `title` `title` VARCHAR(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `surname` `surname` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `firstname` `firstname` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `middlename` `middlename` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `gender` `gender` VARCHAR(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `fathername` `fathername` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `mothername` `mothername` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `dob` `dob` DATE NOT NULL, CHANGE `address` `address` VARCHAR(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `postalcode` `postalcode` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `city` `city` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL, CHANGE `state` `state` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL, CHANGE `religion` `religion` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL, CHANGE `caste` `caste` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `photo` `photo` VARCHAR(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `lti` `lti` VARCHAR(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `fred` `fred` DATE NOT NULL, CHANGE `frjd` `frjd` DATE NOT NULL, CHANGE `adhaar` `adhaar` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `pan` `pan` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `std` `std` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `landline` `landline` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `mobile` `mobile` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `email` `email` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `fax` `fax` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `designation` `designation` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `appiontmenttype` `appiontmenttype` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `programme` `programme` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `course` `course` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `da` `da` INT(5) NOT NULL, CHANGE `ftorpt` `ftorpt` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `doj` `doj` DATE NOT NULL, CHANGE `hra` `hra` INT(20) NOT NULL, CHANGE `gross` `gross` INT(20) NOT NULL, CHANGE `payscale` `payscale` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `pf` `pf` INT(20) NOT NULL, CHANGE `allowance` `allowance` INT(20) NOT NULL, CHANGE `qual1` `qual1` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `yopq1` `yopq1` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `pomq1` `pomq1` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `mosq1` `mosq1` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `noiq1` `noiq1` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `nouq1` `nouq1` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `qual2` `qual2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `yopq2` `yopq2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `pomq2` `pomq2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `mosq2` `mosq2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `noiq2` `noiq2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `nouq2` `nouq2` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `qual3` `qual3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `yopq3` `yopq3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `pomq3` `pomq3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `mosq3` `mosq3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `noiq3` `noiq3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `nouq3` `nouq3` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `te` `te` INT(10) NOT NULL, CHANGE `tte` `tte` INT(10) NOT NULL, CHANGE `re` `re` INT(10) NOT NULL, CHANGE `bankac` `bankac` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `patents` `patents` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `isph` `isph` VARCHAR(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";



if(mysql_query($sql1,$con) && mysql_query($sql2,$con))
{
echo " Tables created successfully";
}

mysql_close($con);



?>
