<?php
echo "
<html>
<head>
<style type='text/css'>
td{font-family:Arial; color:black; font-size:14pt;}
</style>
</head>
<body>
";
?>




<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Openstack1"; // Mysql password
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$value=$_GET['val'];
//echo "$value";


$sql="SELECT * FROM $tbl_name where id=$value";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
//$count1=mysql_num_rows($result);
//$count2=mysql_num_fields($result);
//echo "$count1 $count2";

echo "<h2> The user details are as follows </h2> " ;
echo "<table border='1'>";



/*while(($row = mysql_fetch_row($result)) && ($i <= $count2))
{
echo "$row[$i] /n";
$i=$i+1;
}
*/
/*
// Print the column names as the headers of a table
echo "<table><tr>";
for($i = 0; $i < mysql_num_fields($result); $i++) {
    $field_info = mysql_fetch_field($result, $i);
    echo "<th>{$field_info->name}</th>";
}

// Print the data
while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

*/


while($row = mysql_fetch_row($result) )
{
echo "<tr><td>Id </td><td>$row[0]</td></tr>";
echo "<tr><td>Title</td><td>$row[1]</td></tr>";
echo "<tr><td>surname</td><td>$row[2]</td></tr>";
echo "<tr><td>firstname</td><td>$row[3]</td></tr>";
echo "<tr><td>middlename</td><td>$row[4]</td></tr>";
echo "<tr><td>Gender</td><td>$row[5]</td></tr>";
echo "<tr><td>Fathername</td><td>$row[6]</td></tr>";
echo "<tr><td>Mothername</td><td>$row[7]</td></tr>";
echo "<tr><td>Date of birth</td><td>$row[8]</td></tr>";
echo "<tr><td>Address</td><td>$row[9]</td></tr>";
echo "<tr><td>Postalcode</td><td>$row[10]</td></tr>";
echo "<tr><td>City</td><td>$row[11]</td></tr>";
echo "<tr><td>State</td><td>$row[12]</td></tr>";
echo "<tr><td>Religion</td><td>$row[13]</td></tr>";
echo "<tr><td>Caste</td><td>$row[14]</td></tr>";
echo "<tr><td>Photo</td><td>$row[15]</td></tr>";
echo "<tr><td>Left the institute</td><td>$row[16]</td></tr>";
echo "<tr><td>Faculty Employement date</td><td>$row[17]</td></tr>";
echo "<tr><td>Faculty Rejoining Date</td><td>$row[18]</td></tr>";
echo "<tr><td>Adhaar<td>$row[19]</td></tr>";
echo "<tr><td>Pan</td><td>$row[20]</td></tr>";
echo "<tr><td>std</td><td>$row[21]</td></tr>";
echo "<tr><td>Landline</td><td>$row[22]</td></tr>";
echo "<tr><td>Mobile</td><td>$row[23]</td></tr>";
echo "<tr><td>Email</td><td>$row[24]</td></tr>";
echo "<tr><td>Fax</td><td>$row[25]</td></tr>";
echo "<tr><td>Designation</td><td>$row[26]</td></tr>";
echo "<tr><td>Appointment Type</td><td>$row[27]</td></tr>";
echo "<tr><td>Programme</td><td>$row[28]</td></tr>";
echo "<tr><td>Course</td><td>$row[29]</td></tr>";
echo "<tr><td>Da</td><td>$row[30]</td></tr>";
echo "<tr><td>Full/Part</td><td>$row[31]</td></tr>";
echo "<tr><td>Date of Joining</td><td>$row[32]</td></tr>";
echo "<tr><td>Hra</td><td>$row[33]</td></tr>";
echo "<tr><td>Gross</td><td>$row[34]</td></tr>";
echo "<tr><td>Basic</td><td>$row[62]</td></tr>";
echo "<tr><td>Payscale</td><td>$row[35]</td></tr>";
echo "<tr><td>Pf</td><td>$row[36]</td></tr>";
echo "<tr><td>Allowance</td><td>$row[37]</td></tr>";
echo "<tr><td>Qualiication1</td><td>$row[38]</td></tr>";
echo "<tr><td>Year of Passing</td><td>$row[39]</td></tr>";
echo "<tr><td>Percentage of marks</td><td>$row[40]</td></tr>";
echo "<tr><td>Mode of study</td><td>$row[41]</td></tr>";
echo "<tr><td>Name of institute</td><td>$row[42]</td></tr>";
echo "<tr><td>Name of University</td><td>$row[43]</td></tr>";
echo "<tr><td>Qualification2</td><td>$row[44]</td></tr>";
echo "<tr><td>Year of passing</td><td>$row[45]</td></tr>";
echo "<tr><td>Percentage of marks</td><td>$row[46]</td></tr>";
echo "<tr><td>Mode of Study</td><td>$row[47]</td></tr>";
echo "<tr><td>Name of Institute</td><td>$row[48]</td></tr>";
echo "<tr><td>Name of university</td><td>$row[49]</td></tr>";
echo "<tr><td>Qualification3</td><td>$row[50]</td></tr>";
echo "<tr><td>Year of passing</td><td>$row[51]</td></tr>";
echo "<tr><td>Percentage of marks</td><td>$row[52]</td></tr>";
echo "<tr><td>Mode of study</td><td>$row[53]</td></tr>";
echo "<tr><td>Name of institute</td><td>$row[54]</td></tr>";
echo "<tr><td>Name of university</td><td>$row[55]</td></tr>";
echo "<tr><td>Teaching Experience</td><td>$row[56]</td></tr>";
echo "<tr><td>Total Experience</td><td>$row[57]</td></tr>";
echo "<tr><td>Research Experience</td><td>$row[58]</td></tr>";
echo "<tr><td>Bank Account</td><td>$row[59]</td></tr>";
echo "<tr><td>Patents<td>$row[60]</td></tr>";
echo "<tr><td>Is Physically Handicapped<td>$row[61]</td></tr>";

}

echo "</table>";

//echo "$result[0]";
echo "<a href='showdetails.php'> Back</a>";
mysql_close($con);

?>




<?php
echo "</body>
</html>";
?>
