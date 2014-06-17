<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 


$value=$_GET['val'];
echo "$value";

$array = array(
    "title" => $_POST['title'],
    "surname" => $_POST['surname'],
"firstname" =>$_POST['firstname'],
"middlename" => $_POST['middlename'],
"gender" => $_POST['gender'],
"basic" => $_POST['basic'],
"fathername" => $_POST['fathername'],
"mothername" => $_POST['mothername'],
"dob" => $_POST['dob'], //date of birth
"address" => $_POST['address'],
"postalcode" => $_POST['postalcode'],
"city" => $_POST['city'],
"state" => $_POST['state'],
"religion" => $_POST['religion'],
"caste" => $_POST['caste'],
"lti" => $_POST['lti'], // left the institute?
"fred" => $_POST['fred'],// Faculty Relieved Date
"frjd" => $_POST['frjd'],// Faculty Rejoining Date
"adhaar" => $_POST['adhaar'],
"pan" => $_POST['pan'],
"std" => $_POST['std'],
"landline" => $_POST['landline'],
"mobile" => $_POST['mobile'],
"email" => $_POST['email'],
"fax" => $_POST['fax'],
"designation" => $_POST['designation'],
"appointmenttype" => $_POST['appointmenttype'],
"programme" => $_POST['programme'],
"course" => $_POST['course'],
"da" => $_POST['da'],
"ftorpt" => $_POST['ftorpt'], // full time or part time 
"doj" => $_POST['doj'], // date of joining
"hra" => $_POST['hra'],
"gross" => $_POST['gross'],
"payscale" => $_POST['payscale'],
"pf" => $_POST['pf'],
"allowance" => $_POST['allowance'],
"qual1" => $_POST['qual1'],//quaification1
"yopq1" => $_POST['yopq1'],// year of passing q1 
"pomq1" => $_POST['pomq1'],//percent of marks q1
"mosq1" => $_POST['mosq1'],// mode of study q1
"noiq1" => $_POST['noiq1'],// name of Institute q1
"nouq1" => $_POST['nouq1'],// name of university q1
"qual2" => $_POST['qual2'],//quaification2
"yopq2" => $_POST['yopq2'],// year of passing q2 
"pomq2" => $_POST['pomq2'],//percent of marks q2
"mosq2" => $_POST['mosq2'],// mode of study q2
"noiq2" => $_POST['noiq2'],// name of Institute q2
"nouq2" => $_POST['nouq2'],// name of university q2
"qual3" => $_POST['qual3'],//quaification3
"yopq3" => $_POST['yopq3'],// year of passing q3 
"pomq3" => $_POST['pomq3'],//percent of marks q3
"mosq3" => $_POST['mosq3'],// mode of study q3
"noiq3" => $_POST['noiq3'],// name of Institute q3
"nouq3" => $_POST['nouq3'],// name of university q3
"te" => $_POST['te'], // teaching experience
"tte" => $_POST['tte'],// total teaching experience
"re" => $_POST['re'], // research experience 
"bankac" => $_POST['bankac'],// bank account no 
"patents" => $_POST['patents'],
"isph" => $_POST['isph'], // is physically handicapped
	);

//print_r($array);
echo "$array[firstname]";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// Insert data into mysql 
 // $sql="INSERT INTO test.empdetails  (id, title , surname , firstname , middlename , gender , fathername , mothername , dob , address , postalcode , city , state , religion , caste , photo , lti , fred , frjd , adhaar , pan , std, landline , mobile , email , fax , designation , appointmenttype , programme , course , da , ftorpt , doj , hra , gross , payscale , pf , allowance , qual1 , yopq1 , pomq1 , mosq1 , noiq1 , nouq1 , qual2 , yopq2 , pomq2 , mosq2 , noiq2 , nouq2 , qual3 , yopq3 , pomq3 , mosq3 , noiq3 , nouq3 , te , tte , re , bankac , patents , isph ) VALUES(NULL, '$array[title]', '$array[surname]', '$array[firstname]', '$array[middlename]', '$array[gender]', '$array[fathername]', '$array[mothername]', '$array[dob]', '$array[address]', '$array[postalcode]', '$array[city]', '$array[state]', '$array[religion]', '$array[caste]', '$array[photo]', '$array[lti]', '$array[fred]', '$array[frjd]', '$array[adhaar]', '$array[pan]', '$array[std]', '$array[landline]', '$array[mobile]', '$array[email]', '$array[fax]', '$array[designation]',, '$array[appointmenttype]', '$array[programme]', '$array[course]', '$array[da]', '$array[ftorpt]', '$array[doj]', '$array[hra]', '$array[gross]', '$array[payscale]', '$array[pf]', '$array[allowance]', '$array[qual1]', '$array[yopq1]', '$array[pomq1]', '$array[mosq1]', '$array[noiq1]', '$array[nouq1]', '$array[qual2]', '$array[yopq2]', '$array[pomq2]', '$array[mosq2]', '$array[noiq2]', '$array[nouq2]', '$array[qual3]', '$array[yopq3]', '$array[pomq3]', '$array[mosq3]', '$array[noiq3]', '$array[nouq3]', '$array[te]', '$array[tte]', '$array[re]', '$array[bankac]', '$array[patents]', '$array[isph]')";

//$sql="INSERT INTO test.empdetails  (id, title , surname , firstname , middlename , gender , fathername , mothername , dob , address , postalcode , city , state , religion , caste , photo , lti , fred , frjd , adhaar , pan , std , landline , mobile , email , fax , designation , appiontmenttype , programme , course , da , ftorpt , doj , hra , gross , payscale , pf , allowance , qual1 , yopq1 , pomq1 , mosq1 , noiq1 , nouq1 , qual2 , yopq2 , pomq2 , mosq2 , noiq2 , nouq2 , qual3 , yopq3 , pomq3 , mosq3 , noiq3 , nouq3 , te , tte , re , bankac , patents , isph ) VALUES (NULL, 'mr', 'dsad', 'sad', 'asdasd', 'sad', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'sd', '2013-01-22', '2013-01-19', 'sdasadasd', 'sdasd', 'sdaas', 'sdasad', 'sadasd', 'adsad', 'sda', 'sdadsa', 'dasd', 'sadd', 'sadasd', '21', 'asd', '2013-01-15', '21', '23', 'sadasd', '23', '23', 'dasd', 'ad', 'sdad', 'sadsa', 'sadas', 'asdas', 'asdas', 'asda', 'asd', 'asdas', 'asda', 'das', 'asda', 'asdad', 'asd', 'asdas', 'dsa', 'sad', '2', '2', '2', 'dasdsa', 'dsdfdf asdasdd sa ', 'sds')";


//$sql="INSERT INTO test.empdetails  (id, title , surname , firstname , middlename , gender , fathername , mothername , dob , address , postalcode , city , state , religion , caste , photo , lti , fred , frjd , adhaar , pan , std , landline , mobile , email , fax , designation , appiontmenttype , programme , course , da , ftorpt , doj , hra , gross , payscale , pf , allowance , qual1 , yopq1 , pomq1 , mosq1 , noiq1 , nouq1 , qual2 , yopq2 , pomq2 , mosq2 , noiq2 , nouq2 , qual3 , yopq3 , pomq3 , mosq3 , noiq3 , nouq3 , te , tte , re , bankac , patents , isph ) VALUES (NULL, '$array[title]', '$array[surname]', '$array[firstname]', '$array[middlename]', '$array[gender]', '$array[fathername]', '$array[mothername]', '$array[dob]', '$array[address]', '$array[postalcode]', '$array[city]', '$array[state]', '$array[religion]', '$array[caste]', '$array[photo]', '$array[lti]', '$array[fred]', '$array[frjd]', '$array[adhaar]', '$array[pan]', '$array[std]', '$array[landline]', '$array[mobile]', '$array[email]', '$array[fax]', 'sdadsa', 'dasd', 'sadd', 'sadasd', '21', 'asd', '2013-01-15', '21', '23', 'sadasd', '23', '23', 'dasd', 'ad', 'sdad', 'sadsa', 'sadas', 'asdas', 'asdas', 'asda', 'asd', 'asdas', 'asda', 'das', 'asda', 'asdad', 'asd', 'asdas', 'dsa', 'sad', '2', '2', '2', 'dasdsa', 'dsdfdf asdasdd sa ', 'sds')";

//$sql1="INSERT INTO test.empdetails  (id, title , surname , firstname , middlename , gender , fathername , mothername , dob , address , postalcode , city , state , religion , caste , photo , lti , fred , frjd , adhaar , pan , std , landline , mobile , email , fax , designation , appiontmenttype , programme , course , da , ftorpt , doj , hra , gross , payscale , pf , allowance , qual1 , yopq1 , pomq1 , mosq1 , noiq1 , nouq1 , qual2 , yopq2 , pomq2 , mosq2 , noiq2 , nouq2 , qual3 , yopq3 , pomq3 , mosq3 , noiq3 , nouq3 , te , tte , re , bankac , patents , isph , basic ) VALUES (NULL, '$array[title]', '$array[surname]', '$array[firstname]', '$array[middlename]', '$array[gender]', '$array[fathername]', '$array[mothername]', '$array[dob]', '$array[address]', '$array[postalcode]', '$array[city]', '$array[state]', '$array[religion]', '$array[caste]', '$array[photo]', '$array[lti]', '$array[fred]', '$array[frjd]', '$array[adhaar]', '$array[pan]', '$array[std]', '$array[landline]', '$array[mobile]', '$array[email]', '$array[fax]', '$array[designation]', '$array[appointmenttype]', '$array[programme]', '$array[course]', '$array[da]', '$array[ftorpt]', '$array[doj]', '$array[hra]', '$array[gross]', '$array[payscale]', '$array[pf]', '$array[allowance]', '$array[qual1]', '$array[yopq1]', '$array[pomq1]', '$array[mosq1]', '$array[noiq1]', '$array[nouq1]', '$array[qual2]', '$array[yopq2]', '$array[pomq2]', '$array[mosq2]', '$array[noiq2]', '$array[nouq2]', '$array[qual3]', '$array[yopq3]', '$array[pomq3]', '$array[mosq3]', '$array[noiq3]', '$array[nouq3]', '$array[te]', '$array[tte]', '$array[re]', '$array[bankac]', '$array[patents]', '$array[isph]',  '$array[basic]')";


$sql = "UPDATE  test.empdetails  SET title  = '$array[title]', surname  = '$array[surname]',  firstname  = '$array[firstname]',  middlename  = '$array[middlename]',  gender  = '$array[gender]',  fathername  = '$array[fathername]',  mothername  = '$array[mothername]',  dob  = '$array[dob]',  address  = '$array[address]',  postalcode  = '$array[postalcode]',  city  = '$array[city]',  state  = '$array[state]',  religion  = '$array[religion]',  caste  = '$array[caste]', lti  = '$array[lti]',  adhaar  = '$array[adhaar]',  pan  = '$array[pan]',  std  = '$array[std]',  landline  = '$array[landline]',  mobile  = '$array[mobile]',  email  = '$array[email]',  fax  = '$array[fax]',  designation  = '$array[designation]',  programme  = '$array[programme]',  course  = '$array[course]',  da  = '$array[da]',  ftorpt  = '$array[ftorpt]',  doj  = '$array[doj]',  hra  = '$array[hra]',  gross  = '$array[gross]',  payscale  = '$array[payscale]',  pf  = '$array[pf]',  allowance  = '$array[allowance]',  qual1  = '$array[qual1]',  yopq1  = '$array[yopq1]',  pomq1  = '$array[pomq1]',  mosq1  = '$array[mosq1]',  noiq1  = '$array[noiq1]',  nouq1  = '$array[nouq1]',  qual2  = '$array[qual2]',  yopq2  = '$array[yopq2]',  pomq2  = '$array[pomq2]',  mosq2  = '$array[mosq2]',  noiq2  = '$array[noiq2]',  nouq2  = '$array[nouq2]',  qual3  = '$array[qual3]',  yopq3  = '$array[yopq3]',  pomq3  = '$array[pomq3]',  mosq3  = '$array[mosq3]',  noiq3  = '$array[noiq3]',  nouq3  = '$array[nouq3]', te  = '$array[te]',  tte  = '$array[tte]',  re  = '$array[re]',  bankac  = '$array[bankac]',  patents  = '$array[patents]',  isph  = '$array[isph]',  basic  = '$array[basic]' WHERE  empdetails . id  = '$value' ";



$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<h1> Update Successful <h1>" ;
echo "<BR>";
echo "<a href='admin.php'>Back </a>";
}

else {
echo "ERROR";
}

?> 

<?php 
// close connection 
mysql_close();



/*
"title=>$_POST['title'],
"surname=>$_POST['surname'],
 echo ""v1 "v2 "v3 "v4 "v5 "v6 "v7 "v8 "v9 "v10 "v11 "v12 "v13 "v14 "v15 "v16 "v17 "v18 "v19 "v20 "v21 "v22
 "v23 "v24 "v25 "v26 "v27 "v28 "v29 "v30 "v31 "v32 "v33 "v34 "v35 "v36 "v37 "v38 "v39 "v40 "v41 "v42 "v43 "v44 "v45 "v46 "v47 "v48 "v49 "v50 "v51",
*/


?>



