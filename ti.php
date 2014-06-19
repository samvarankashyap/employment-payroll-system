
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$array = array(
    "title" => "mr",
    "surname" => "suename",
"firstname" => "name",
"middlename" => "middlename",
"gender" => "gender",
);
// Insert data into mysql 
//$sql="INSERT INTO empdetails(title, surname, firstname, middlename, gender, fathername, mothername, dob, address, postalcode, city, state, religion, caste, photo , lti, fred, frjd, adhaar, pan, std, landline, mobile, email, fax, designation, appointmenttype, programme, course, da, ftorpt, doj, hra, gross, payscale, pf, allowance, qual1, yopq1, pomq1, mosq1, noiq1, nouq1, qual2, yopq2, pomq2, mosq2, noiq2, nouq2, qual3, yopq3, pomq3, mosq3, noiq3, nouq3, te, tte, re, bankac, patents, isph)VALUES('$array[title]', '$array[surname]', '$array[firstname]', '$array[middlename]', '$array[gender]', '$array[fathername]', '$array[mothername]', '$array[dob]', '$array[address]', '$array[postalcode]', '$array[city]', '$array[state]', '$array[religion]', '$array[caste]', '$array[photo]', '$array[lti]', '$array[fred]', '$array[frjd]', '$array[adhaar]', '$array[pan]', '$array[std]', '$array[landline]', '$array[mobile]', '$array[email]', '$array[fax]', '$array[designation]',, '$array[appointmenttype]', '$array[programme]', '$array[course]', '$array[da]', '$array[ftorpt]', '$array[doj]', '$array[hra]', '$array[gross]', '$array[payscale]', '$array[pf]', '$array[allowance]', '$array[qual1]', '$array[yopq1]', '$array[pomq1]', '$array[mosq1]', '$array[noiq1]', '$array[nouq1]', '$array[qual2]', '$array[yopq2]', '$array[pomq2]', '$array[mosq2]', '$array[noiq2]', '$array[nouq2]', '$array[qual3]', '$array[yopq3]', '$array[pomq3]', '$array[mosq3]', '$array[noiq3]', '$array[nouq3]', '$array[te]', '$array[tte]', '$array[re]', '$array[bankac]', '$array[patents]', '$array[isph]')";

$sql="INSERT INTO test.empdetails  (id, title , surname , firstname , middlename , gender , fathername , mothername , dob , address , postalcode , city , state , religion , caste , photo , lti , fred , frjd , adhaar , pan , std , landline , mobile , email , fax , designation , appiontmenttype , programme , course , da , ftorpt , doj , hra , gross , payscale , pf , allowance , qual1 , yopq1 , pomq1 , mosq1 , noiq1 , nouq1 , qual2 , yopq2 , pomq2 , mosq2 , noiq2 , nouq2 , qual3 , yopq3 , pomq3 , mosq3 , noiq3 , nouq3 , te , tte , re , bankac , patents , isph ) VALUES (NULL, '$array[title]', '$array[surname]', '$array[firstname]', '$array[middlename]', '$array[gender]', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'sd', '2013-01-22', '2013-01-19', 'sdasadasd', 'sdasd', 'sdaas', 'sdasad', 'sadasd', 'adsad', 'sda', 'sdadsa', 'dasd', 'sadd', 'sadasd', '21', 'asd', '2013-01-15', '21', '23', 'sadasd', '23', '23', 'dasd', 'ad', 'sdad', 'sadsa', 'sadas', 'asdas', 'asdas', 'asda', 'asd', 'asdas', 'asda', 'das', 'asda', 'asdad', 'asd', 'asdas', 'dsa', 'sad', '2', '2', '2', 'dasdsa', 'dsdfdf asdasdd sa ', 'sds')";



$result = mysql_query($sql)or die();

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insertval.php'>Back to main page</a>";
}

else {
echo "ERROR";
}

?> 
