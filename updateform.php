<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="empdetails"; // Table name 

// Connect to server and select databse.
$con = mysql_pconnect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$value=$_GET['val'];
//echo "$value";


$sql="SELECT * FROM $tbl_name where id=$value";
$result=mysql_query($sql);
$row = mysql_fetch_row($result);

?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 8 - http://www.wysiwygwebbuilder.com">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<style type="text/css">
#wb_Form1
{
   background-color: #FAFAFA;
   border: 0px #000000 solid;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text1 div
{
   text-align: left;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text2 div
{
   text-align: left;
}
#Combobox1
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text3 div
{
   text-align: left;
}
#Editbox1
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text4 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text4 div
{
   text-align: left;
}
#Editbox2
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text5 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text5 div
{
   text-align: left;
}
#Editbox3
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text6 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text6 div
{
   text-align: left;
}
#Combobox2
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text7 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text7 div
{
   text-align: left;
}
#Editbox4
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text8 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text8 div
{
   text-align: left;
}
#Editbox5
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text9 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text9 div
{
   text-align: left;
}
#Editbox6
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text10 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text10 div
{
   text-align: left;
}
#TextArea1
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
}
#wb_Text11 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text11 div
{
   text-align: left;
}
#Editbox7
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text12 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text12 div
{
   text-align: left;
}
#Editbox8
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text13 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text13 div
{
   text-align: left;
}
#Editbox9
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text14 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text14 div
{
   text-align: left;
}
#Editbox10
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text15 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text15 div
{
   text-align: left;
}
#Editbox11
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text16 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text16 div
{
   text-align: left;
}
#FileUpload1
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family:Arial;
   font-size: 13px;
}
#wb_Text17 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text17 div
{
   text-align: left;
}
#Combobox3
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text18 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text18 div
{
   text-align: left;
}
#Editbox12
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text19 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text19 div
{
   text-align: left;
}
#Editbox13
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text20 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text20 div
{
   text-align: left;
}
#Editbox14
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text21 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text21 div
{
   text-align: left;
}
#Editbox15
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text22 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text22 div
{
   text-align: left;
}
#Editbox16
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text23 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text23 div
{
   text-align: left;
}
#Editbox17
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text24 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text24 div
{
   text-align: left;
}
#Editbox18
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text25 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text25 div
{
   text-align: left;
}
#Editbox19
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text26 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text26 div
{
   text-align: left;
}
#Editbox20
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text27 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text27 div
{
   text-align: left;
}
#wb_Text28 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text28 div
{
   text-align: left;
}
#Combobox4
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text29 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text29 div
{
   text-align: left;
}
#Combobox5
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text30 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text30 div
{
   text-align: left;
}
#Combobox6
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text31 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text31 div
{
   text-align: left;
}
#Combobox7
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text32 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text32 div
{
   text-align: left;
}
#Combobox8
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text33 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text33 div
{
   text-align: left;
}
#Editbox21
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text37 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text37 div
{
   text-align: left;
}
#Editbox22
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text38 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text38 div
{
   text-align: left;
}
#Editbox23
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text39 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text39 div
{
   text-align: left;
}
#Editbox24
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text40 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text40 div
{
   text-align: left;
}
#wb_Text41 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text41 div
{
   text-align: left;
}
#Editbox25
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text42 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text42 div
{
   text-align: left;
}
#Editbox26
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text43 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text43 div
{
   text-align: left;
}
#Editbox27
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text44 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text44 div
{
   text-align: left;
}
#wb_Text45 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text45 div
{
   text-align: left;
}
#Combobox13
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text50 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text50 div
{
   text-align: left;
}
#wb_Text51 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text51 div
{
   text-align: left;
}
#Editbox29
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text52 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text52 div
{
   text-align: left;
}
#Editbox30
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text53 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text53 div
{
   text-align: left;
}
#Editbox31
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text54 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text54 div
{
   text-align: left;
}
#wb_Text55 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text55 div
{
   text-align: left;
}
#Editbox32
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text56 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text56 div
{
   text-align: left;
}
#TextArea2
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
}
#wb_Text57 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text57 div
{
   text-align: left;
}
#Combobox17
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Editbox33
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text34 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text34 div
{
   text-align: left;
}
#Editbox34
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox35
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text59 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text59 div
{
   text-align: left;
}
#Editbox37
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox39
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text61 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text61 div
{
   text-align: left;
}
#wb_Text62 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text62 div
{
   text-align: left;
}
#wb_Text63 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text63 div
{
   text-align: left;
}
#wb_Text35 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text35 div
{
   text-align: left;
}
#wb_Text36 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text36 div
{
   text-align: left;
}
#Editbox28
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text46 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text46 div
{
   text-align: left;
}
#Editbox36
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text47 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text47 div
{
   text-align: left;
}
#wb_Text48 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text48 div
{
   text-align: left;
}
#wb_Text49 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text49 div
{
   text-align: left;
}
#wb_Text58 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text58 div
{
   text-align: left;
}
#wb_Text60 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text60 div
{
   text-align: left;
}
#Editbox43
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text64 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text64 div
{
   text-align: left;
}
#Editbox44
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text65 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text65 div
{
   text-align: left;
}
#wb_Text66 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text66 div
{
   text-align: left;
}
#wb_Text67 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text67 div
{
   text-align: left;
}
#Combobox11
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Combobox9
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Combobox10
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Combobox12
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Combobox14
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Editbox38
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox40
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox41
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox42
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
</style>
<script type="text/javascript">
<!--
function Validateregform(theForm)
{
   var regexp;
   if (theForm.Combobox1.selectedIndex < 0)
   {
      alert("Please select one of the \"title\" options.");
      theForm.Combobox1.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox1.value))
   {
      alert("Please enter only letter characters in the \"surname\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value == "")
   {
      alert("Please enter a value for the \"surname\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"surname\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox2.value))
   {
      alert("invalid first name ");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value == "")
   {
      alert("invalid first name ");
      theForm.Editbox2.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox3.value))
   {
      alert("Invalid format for Middle name");
      theForm.Editbox3.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ.]*$/;
   if (!regexp.test(theForm.Editbox4.value))
   {
      alert("Invalid format for Father name");
      theForm.Editbox4.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ.]*$/;
   if (!regexp.test(theForm.Editbox5.value))
   {
      alert("Invalid format for mother name");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox5.value == "")
   {
      alert("Invalid format for mother name");
      theForm.Editbox5.focus();
      return false;
   }
   regexp = /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/;
   if (!regexp.test(theForm.Editbox6.value))
   {
      alert("date format invalid yyyymmdd");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value == "")
   {
      alert("date format invalid yyyymmdd");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.TextArea1.value == "")
   {
      alert("please Enter address field");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea1.value.length < 5)
   {
      alert("please Enter address field");
      theForm.TextArea1.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox7.value))
   {
      alert("invalid postal code");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value == "")
   {
      alert("invalid postal code");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length > 6)
   {
      alert("invalid postal code");
      theForm.Editbox7.focus();
      return false;
   }
      regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ.]*$/;
   if (!regexp.test(theForm.Editbox8.value))
   {
      alert("Invalid format for City/village");
      theForm.Editbox8.focus();
      return false;
   }
   if (theForm.Editbox8.value == "")
   {
      alert("Invalid format for City/village");
      theForm.Editbox8.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(theForm.Editbox9.value))
   {
      alert("Invalid format for State");
      theForm.Editbox9.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(theForm.Editbox10.value))
   {
      alert("Invalid format for Religion");
      theForm.Editbox10.focus();
      return false;
   }
   if (theForm.Editbox10.value == "")
   {
      alert("Invalid format for Religion");
      theForm.Editbox10.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f-]*$/;
   if (!regexp.test(theForm.Editbox11.value))
   {
      alert("Invalid format for  caste");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.Editbox11.value == "")
   {
      alert("Invalid format for  caste");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.FileUpload1.value == "")
   {
      alert("please specify the path for photograph");
      theForm.FileUpload1.focus();
      return false;
   }
   if (theForm.Combobox3.selectedIndex < 0)
   {
      alert("Please select one of the \"lti\" options.");
      theForm.Combobox3.focus();
      return false;
   }
   regexp = /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/;
   if (!regexp.test(theForm.Editbox12.value))
   {
      alert("Invalid format for Faculty Relieved Date - yyyymmdd");
      theForm.Editbox12.focus();
      return false;
   }
   regexp = /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/;
   if (!regexp.test(theForm.Editbox13.value))
   {
      alert("Invalid format for Faculty rejoining Date - yyyymmdd");
      theForm.Editbox13.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox16.value))
   {
      alert("Please enter only digit characters in the \"std\" field.");
      theForm.Editbox16.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox17.value))
   {
      alert("Please enter only digit characters in the \"landline\" field.");
      theForm.Editbox17.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox18.value))
   {
      alert("Please enter only digit characters in the \"mobile\" field.");
      theForm.Editbox18.focus();
      return false;
   }
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (!regexp.test(theForm.Editbox19.value))
   {
      alert("Invalid format for email address");
      theForm.Editbox19.focus();
      return false;
   }
   if (theForm.Editbox19.value == "")
   {
      alert("Invalid format for email address");
      theForm.Editbox19.focus();
      return false;
   }
   regexp = /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/;
   if (!regexp.test(theForm.Editbox22.value))
   {
      alert("Invalid format for date of joining - yyyymmdd");
      theForm.Editbox22.focus();
      return false;
   }
   if (theForm.Editbox22.value == "")
   {
      alert("Invalid format for date of joining - yyyymmdd");
      theForm.Editbox22.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox23.value))
   {
      alert("Please enter only digit characters in the \"hra\" field.");
      theForm.Editbox23.focus();
      return false;
   }
   if (theForm.Combobox13.selectedIndex < 0)
   {
      alert("qualification1 not filled");
      theForm.Combobox13.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox34.value))
   {
      alert("Invalid year of passing for qualification 1");
      theForm.Editbox34.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox35.value))
   {
      alert("Invalid percentage of marks for qualification 1");
      theForm.Editbox35.focus();
      return false;
   }
   if (theForm.Editbox35.value == "")
   {
      alert("Invalid percentage of marks for qualification 1");
      theForm.Editbox35.focus();
      return false;
   }
   if (theForm.Editbox39.value == "")
   {
      alert("ivalid name of university");
      theForm.Editbox39.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox37.value))
   {
      alert("invalid name");
      theForm.Editbox37.focus();
      return false;
   }
   if (theForm.Editbox37.value == "")
   {
      alert("invalid name");
      theForm.Editbox37.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox28.value))
   {
      alert("Invalid year of passing for qualification 2");
      theForm.Editbox28.focus();
      return false;
   }
   if (theForm.Editbox28.value == "")
   {
      alert("Invalid year of passing for qualification 2");
      theForm.Editbox28.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox36.value))
   {
      alert("Invalid percentage of marks for qualification 2");
      theForm.Editbox36.focus();
      return false;
   }
   if (theForm.Editbox36.value == "")
   {
      alert("Invalid percentage of marks for qualification 2");
      theForm.Editbox36.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox43.value))
   {
      alert("Invalid year of passing for qualification 3");
      theForm.Editbox43.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox44.value))
   {
      alert("Invalid percentage of marks for qualification 3");
      theForm.Editbox44.focus();
      return false;
   }
   if (theForm.Editbox44.value == "")
   {
      alert("Invalid percentage of marks for qualification 3");
      theForm.Editbox44.focus();
      return false;
   }
   if (theForm.Combobox11.selectedIndex < 0)
   {
      alert("Please select one of the \"mosq1\" options.");
      theForm.Combobox11.focus();
      return false;
   }
   if (theForm.Combobox9.selectedIndex < 0)
   {
      alert("qualification2 not filled");
      theForm.Combobox9.focus();
      return false;
   }
   if (theForm.Combobox10.selectedIndex < 0)
   {
      alert("qualification3 not filled");
      theForm.Combobox10.focus();
      return false;
   }
   if (theForm.Combobox12.selectedIndex < 0)
   {
      alert("Please select one of the \"mosq2\" options.");
      theForm.Combobox12.focus();
      return false;
   }
   if (theForm.Combobox14.selectedIndex < 0)
   {
      alert("Please select one of the \"mosq3\" options.");
      theForm.Combobox14.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox38.value))
   {
      alert("invalid name");
      theForm.Editbox38.focus();
      return false;
   }
   if (theForm.Editbox38.value == "")
   {
      alert("invalid name");
      theForm.Editbox38.focus();
      return false;
   }
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.Editbox40.value))
   {
      alert("invalid name");
      theForm.Editbox40.focus();
      return false;
   }
   if (theForm.Editbox40.value == "")
   {
      alert("invalid name");
      theForm.Editbox40.focus();
      return false;
   }
   if (theForm.Editbox41.value == "")
   {
      alert("ivalid name of university");
      theForm.Editbox41.focus();
      return false;
   }
   if (theForm.Editbox42.value == "")
   {
      alert("ivalid name of university");
      theForm.Editbox42.focus();
      return false;
   }
   return true;
}
//-->
</script>
</head>
<body>
<div id="wb_Form1" style="position:relative;left:5px;top:50px;width:100%;height:100%;z-index:130;">
<form name="regform" method="post" action="insertval.php"  id="Form1" onsubmit="return Validateregform(this)">
<div id="wb_Text2" style="position:absolute;left:10px;top:40px;width:189px;height:16px;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Title:</span></div>
<select name="title" size="1" id="Combobox1" style="position:absolute;left:209px;top:40px;width:200px;height:25px;z-index:1;">

<?php 
if ($row[1]=='mr')
{echo "<option value='mr' selected='selected'>Mr</option>   <option value='mrs'>Mr</option> ";}
if ($row[1]=='mrs')
{echo "<option value='mrs' selected='selected'>Mrs</option>   <option value='mr'>Mrs</option> ";}
?>

</select>
<div id="wb_Text3" style="position:absolute;left:10px;top:70px;width:189px;height:16px;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Surname:</span></div>
<input type="text" id="surname" style="position:absolute;left:209px;top:70px;width:198px;height:23px;line-height:23px;z-index:3;" name="surname" value="<?php echo"$row[2]"; ?>"">
<div id="wb_Text4" style="position:absolute;left:10px;top:100px;width:189px;height:16px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:13px;">First Name:</span></div>
<input type="text" id="Editbox2" style="position:absolute;left:209px;top:100px;width:198px;height:23px;line-height:23px;z-index:5;" name="firstname" value="<?php echo"$row[3]"; ?>">
<div id="wb_Text5" style="position:absolute;left:10px;top:130px;width:189px;height:16px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Middle Name:</span></div>
<input type="text" id="Editbox3" style="position:absolute;left:209px;top:130px;width:198px;height:23px;line-height:23px;z-index:7;" name="middlename" value="<?php echo"$row[4]"; ?>">
<div id="wb_Text6" style="position:absolute;left:10px;top:160px;width:189px;height:16px;z-index:8;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Gender:</span></div>
<select name="gender" size="1" id="Combobox2" style="position:absolute;left:209px;top:160px;width:200px;height:25px;z-index:9;">
<?php 
if ($row[5]=='male')
{echo "<option value='male' selected='selected'>Male</option>   <option value='female'>female</option> ";}
if ($row[5]=='female')
{echo "<option value='female' selected='selected'>Female</option>   <option value='Male'>Male</option> ";}
?>
</select>
<div id="wb_Text7" style="position:absolute;left:10px;top:190px;width:189px;height:16px;z-index:10;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Father's Name:</span></div>
<input type="text" id="Editbox4" style="position:absolute;left:209px;top:190px;width:198px;height:23px;line-height:23px;z-index:11;" name="fathername" value="<?php echo"$row[6]"; ?>">
<div id="wb_Text8" style="position:absolute;left:10px;top:220px;width:189px;height:16px;z-index:12;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mother's Name:</span></div>
<input type="text" id="Editbox5" style="position:absolute;left:209px;top:220px;width:198px;height:23px;line-height:23px;z-index:13;" name="mothername" value="<?php echo"$row[7]"; ?>">
<div id="wb_Text9" style="position:absolute;left:10px;top:250px;width:189px;height:16px;z-index:14;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Date of Birth:</span></div>
<input type="text" id="Editbox6" style="position:absolute;left:209px;top:250px;width:198px;height:23px;line-height:23px;z-index:15;" name="dob" value="<?php echo"$row[8]"; ?>">
<div id="wb_Text10" style="position:absolute;left:10px;top:280px;width:189px;height:16px;z-index:16;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Address:</span></div>
<textarea name="address" id="TextArea1" style="position:absolute;left:209px;top:280px;width:198px;height:98px;z-index:17;" rows="5" cols="27"><?php echo"$row[9]"; ?></textarea>
<div id="wb_Text11" style="position:absolute;left:10px;top:385px;width:189px;height:16px;z-index:18;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Postalcode:</span></div>
<input type="text" id="Editbox7" style="position:absolute;left:209px;top:385px;width:198px;height:23px;line-height:23px;z-index:19;" name="postalcode" value="<?php echo"$row[10]"; ?>">
<div id="wb_Text12" style="position:absolute;left:10px;top:415px;width:189px;height:16px;z-index:20;">
<span style="color:#000000;font-family:Arial;font-size:13px;">City/Village:</span></div>
<input type="text" id="Editbox8" style="position:absolute;left:209px;top:415px;width:198px;height:23px;line-height:23px;z-index:21;" name="city" value="<?php echo"$row[11]"; ?>">
<div id="wb_Text13" style="position:absolute;left:10px;top:445px;width:189px;height:16px;z-index:22;">
<span style="color:#000000;font-family:Arial;font-size:13px;">State:</span></div>
<input type="text" id="Editbox9" style="position:absolute;left:209px;top:445px;width:198px;height:23px;line-height:23px;z-index:23;" name="state" value="<?php echo"$row[12]"; ?>">
<div id="wb_Text14" style="position:absolute;left:10px;top:475px;width:189px;height:16px;z-index:24;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Religion:</span></div>
<input type="text" id="Editbox10" style="position:absolute;left:209px;top:475px;width:198px;height:23px;line-height:23px;z-index:25;" name="religion" value="<?php echo"$row[13]"; ?>">
<div id="wb_Text15" style="position:absolute;left:10px;top:505px;width:189px;height:16px;z-index:26;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Caste:</span></div>
<input type="text" id="Editbox11" style="position:absolute;left:209px;top:505px;width:198px;height:23px;line-height:23px;z-index:27;" name="caste" value="<?php echo"$row[14]"; ?>">

<div id="wb_Text17" style="position:absolute;left:10px;top:565px;width:189px;height:16px;z-index:30;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Left the Institute? :</span></div>
<select name="lti" size="1" id="Combobox3" style="position:absolute;left:209px;top:565px;width:200px;height:25px;z-index:31;">
<?php 
if ($row[16]=='yes')
{echo "<option value='yes' selected='selected'>yes</option>   <option value='no'>no</option> ";}
if ($row[16]=='no')
{echo "<option value='no' selected='selected'>No</option>   <option value='yes'>yes</option> ";}
?>
</select>
<div id="wb_Text18" style="position:absolute;left:10px;top:595px;width:189px;height:16px;z-index:32;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Faculty Relieved Date : </span></div>
<input type="text" id="Editbox12" style="position:absolute;left:209px;top:594px;width:198px;height:23px;line-height:23px;z-index:33;" name="fred" value="<?php echo"$row[17]"; ?>">
<div id="wb_Text19" style="position:absolute;left:10px;top:625px;width:189px;height:16px;z-index:34;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Faculty Rejoining Date :</span></div>
<input type="text" id="Editbox13" style="position:absolute;left:209px;top:625px;width:198px;height:23px;line-height:23px;z-index:35;" name="frjd" value="<?php echo"$row[18]"; ?>">
<div id="wb_Text20" style="position:absolute;left:10px;top:655px;width:189px;height:16px;z-index:36;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Adhaar Card:</span></div>
<input type="text" id="Editbox14" style="position:absolute;left:209px;top:655px;width:198px;height:23px;line-height:23px;z-index:37;" name="adhaar" value="<?php echo"$row[19]"; ?>">
<div id="wb_Text21" style="position:absolute;left:10px;top:685px;width:189px;height:16px;z-index:38;">
<span style="color:#000000;font-family:Arial;font-size:13px;">PAN:</span></div>
<input type="text" id="Editbox15" style="position:absolute;left:209px;top:685px;width:198px;height:23px;line-height:23px;z-index:39;" name="pan" value="<?php echo"$row[20]"; ?>">
<div id="wb_Text22" style="position:absolute;left:10px;top:715px;width:189px;height:16px;z-index:40;">
<span style="color:#000000;font-family:Arial;font-size:13px;">STD Code:</span></div>
<input type="text" id="Editbox16" style="position:absolute;left:209px;top:715px;width:198px;height:23px;line-height:23px;z-index:41;" name="std" value="<?php echo"$row[21]"; ?>">
<div id="wb_Text23" style="position:absolute;left:10px;top:745px;width:189px;height:16px;z-index:42;">
<span style="color:#000000;font-family:Arial;font-size:13px;">LandLine # :</span></div>
<input type="text" id="Editbox17" style="position:absolute;left:209px;top:745px;width:198px;height:23px;line-height:23px;z-index:43;" name="landline" value="<?php echo"$row[22]"; ?>">
<div id="wb_Text24" style="position:absolute;left:10px;top:775px;width:189px;height:16px;z-index:44;">
<span style="color:#000000;font-family:Arial;font-size:13px;">MobilePhone#:</span></div>
<input type="text" id="Editbox18" style="position:absolute;left:209px;top:775px;width:198px;height:23px;line-height:23px;z-index:45;" name="mobile" value="<?php echo"$row[23]"; ?>">
<div id="wb_Text25" style="position:absolute;left:10px;top:805px;width:189px;height:16px;z-index:46;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Email Address:</span></div>
<input type="text" id="Editbox19" style="position:absolute;left:209px;top:805px;width:198px;height:23px;line-height:23px;z-index:47;" name="email" value="<?php echo"$row[24]"; ?>">
<div id="wb_Text26" style="position:absolute;left:10px;top:835px;width:189px;height:16px;z-index:48;">
<span style="color:#000000;font-family:Arial;font-size:13px;">FaxPhone #:</span></div>
<input type="text" id="Editbox20" style="position:absolute;left:209px;top:835px;width:198px;height:23px;line-height:23px;z-index:49;" name="fax" value="<?php echo"$row[25]"; ?>">
<div id="wb_Text27" style="position:absolute;left:10px;top:865px;width:171px;height:16px;z-index:50;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><u>Details Related to profession</u></span></div>
<div id="wb_Text28" style="position:absolute;left:10px;top:890px;width:189px;height:16px;z-index:51;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Exact Designation:</span></div>
<select name="designation" size="1" id="Combobox4" style="position:absolute;left:209px;top:890px;width:200px;height:25px;z-index:52;">


<?php 
if ($row[26]=='asstprof')
{echo "<option selected value='asstprof'>Asst.prof</option>
<option value='assoprof'>Asso.Prof</option>
<option value='srasstprof'>Sr.Asst.Prof</option>
<option value='srassoprof'>Sr.Asso.Prof</option>
<option value='professor'>Professor</option>";}
if ($row[26]=='assoprof')
{echo "<option  value='asstprof'>Asst.prof</option>
<option selected value='assoprof'>Asso.Prof</option>
<option value='srasstprof'>Sr.Asst.Prof</option>
<option value='srassoprof'>Sr.Asso.Prof</option>
<option value='professor'>Professor</option>";}

if ($row[26]=='srasstprof')
{echo "<option  value='asstprof'>Asst.prof</option>
<option value='assoprof'>Asso.Prof</option>
<option selected value='srasstprof'>Sr.Asst.Prof</option>
<option value='srassoprof'>Sr.Asso.Prof</option>
<option value='professor'>Professor</option>";}

if ($row[26]=='srassoprof')
{echo "<option  value='asstprof'>Asst.prof</option>
<option value='assoprof'>Asso.Prof</option>
<option  value='srasstprof'>Sr.Asst.Prof</option>
<option selected value='srassoprof'>Sr.Asso.Prof</option>
<option value='professor'>Professor</option>";}

if ($row[26]=='professor')
{
echo "<option  value='asstprof'>Asst.prof</option>
<option value='assoprof'>Asso.Prof</option>
<option  value='srasstprof'>Sr.Asst.Prof</option>
<option value='srassoprof'>Sr.Asso.Prof</option>
<option selected value='professor'>Professor</option>";
}

?>

</select>
<div id="wb_Text29" style="position:absolute;left:10px;top:920px;width:189px;height:16px;z-index:53;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Appointment Type:</span></div>
<select name="appointmenttype" size="1" id="Combobox5" style="position:absolute;left:209px;top:920px;width:200px;height:25px;z-index:54;">

<?php 
if ($row[27]=='teaching')
{echo "<option selected='selected' value='teaching'>Teaching</option>  <option value='nonteaching'>nonteaching</option> ";}
if ($row[27]=='nonteaching')
{echo "<option  value='teaching'>Teaching</option>  <option selected='selected' value='nonteaching'>nonteaching</option> ";}
?>

</select>
<div id="wb_Text30" style="position:absolute;left:10px;top:950px;width:189px;height:16px;z-index:55;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Programme:</span></div>
<select name="programme" size="1" id="Combobox6" style="position:absolute;left:209px;top:950px;width:200px;height:25px;z-index:56;">
<?php 
if ($row[28]=='engineering')
{echo "<option selected value='engineering'>Engineering</option>";}

?>

</select>
<div id="wb_Text31" style="position:absolute;left:10px;top:980px;width:189px;height:16px;z-index:57;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Course:</span></div>
<select name="course" size="1" id="Combobox7" style="position:absolute;left:209px;top:980px;width:202px;height:23px;z-index:58;">

<?php
if ($row[29]=='cse')
{
echo"
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='eee'>EEE</option>
<option value='it'>IT</option>
<option value='mmt'>MMT</option>
<option value='mct'>MCT</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}


elseif ($row[29]=='ece')
{
echo"
<option value='ece'>ECE</option>
<option value='cse'>CSE</option>
<option value='eee'>EEE</option>
<option value='it'>IT</option>
<option value='mmt'>MMT</option>
<option value='mct'>MCT</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}

elseif ($row[29]=='eee')
{
echo"
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='it'>IT</option>
<option value='mmt'>MMT</option>
<option value='mct'>MCT</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}

elseif ($row[29]=='it')
{
echo"
<option value='it'>IT</option>
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='mmt'>MMT</option>
<option value='mct'>MCT</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}


elseif ($row[29]=='mmt')
{
echo"
<option value='mmt'>MMT</option>
<option value='it'>IT</option>
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='mct'>MCT</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}

elseif ($row[29]=='mct')
{
echo"
<option value='mct'>MCT</option>
<option value='mmt'>MMT</option>
<option value='it'>IT</option>
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='mech'>MECH</option>
<option value='civil'>CIVIL</option>
";
}

elseif ($row[29]=='mech')
{
echo"
<option value='mech'>MECH</option>
<option value='mct'>MCT</option>
<option value='mmt'>MMT</option>
<option value='it'>IT</option>
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='civil'>CIVIL</option>
";
}

elseif ($row[29]=='civil')
{
echo"
<option value='civil'>CIVIL</option>
<option value='mct'>MCT</option>
<option value='mmt'>MMT</option>
<option value='it'>IT</option>
<option value='eee'>EEE</option>
<option value='cse'>CSE</option>
<option value='ece'>ECE</option>
<option value='mech'>MECH</option>
";
}

?>


</select>
<div id="wb_Text32" style="position:absolute;left:10px;top:1010px;width:189px;height:16px;z-index:59;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Faculty Shift:</span></div>
<select name="ftorpt" size="1" id="Combobox8" style="position:absolute;left:209px;top:1012px;width:200px;height:25px;z-index:60;">
<?php 
if ($row[32]=='ft')
{echo "<option selected='selected' value='ft'>Fulltime</option>  <option value='pt'>Part time</option> ";}
if ($row[32]=='pt')
{echo "<option  value='pt'>Part time</option>  <option selected='selected' value='ft'>Fulltime</option> ";}
?>
</select>
<div id="wb_Text33" style="position:absolute;left:10px;top:1043px;width:189px;height:16px;z-index:61;">
<span style="color:#000000;font-family:Arial;font-size:13px;">DA% :</span></div>
<input type="text" id="Editbox21" style="position:absolute;left:209px;top:1041px;width:198px;height:23px;line-height:23px;z-index:62;" name="da" value="">
<div id="wb_Text37" style="position:absolute;left:10px;top:1160px;width:189px;height:16px;z-index:63;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Date of Joining:</span></div>
<input type="text" id="Editbox22" style="position:absolute;left:209px;top:1160px;width:198px;height:23px;line-height:23px;z-index:64;" name="doj" value="">
<div id="wb_Text38" style="position:absolute;left:10px;top:1190px;width:189px;height:16px;z-index:65;">
<span style="color:#000000;font-family:Arial;font-size:13px;">HRA in Rs :</span></div>
<input type="text" id="Editbox23" style="position:absolute;left:208px;top:1190px;width:198px;height:23px;line-height:23px;z-index:66;" name="hra" value="">
<div id="wb_Text39" style="position:absolute;left:10px;top:1220px;width:189px;height:16px;z-index:67;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Gross Pay per Month:</span></div>
<input type="text" id="Editbox24" style="position:absolute;left:209px;top:1220px;width:198px;height:23px;line-height:23px;z-index:68;" name="gross" value="" autocomplete="on">
<div id="wb_Text40" style="position:absolute;left:10px;top:1250px;width:189px;height:16px;z-index:69;">
<span style="color:#000000;font-family:Arial;font-size:13px;">PayScale:</span></div>
<div id="wb_Text41" style="position:absolute;left:10px;top:1280px;width:189px;height:16px;z-index:70;">
<span style="color:#000000;font-family:Arial;font-size:13px;">PF Number:</span></div>
<input type="text" id="Editbox25" style="position:absolute;left:209px;top:1280px;width:198px;height:23px;line-height:23px;z-index:71;" name="pf" value="" autocomplete="on">
<div id="wb_Text42" style="position:absolute;left:10px;top:1310px;width:189px;height:16px;z-index:72;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Basic pay in Rs:</span></div>
<input type="text" id="Editbox26" style="position:absolute;left:209px;top:1310px;width:198px;height:23px;line-height:23px;z-index:73;" name="basic" value="" autocomplete="on">
<div id="wb_Text43" style="position:absolute;left:10px;top:1340px;width:189px;height:16px;z-index:74;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Other Allowances in Rs:</span></div>
<input type="text" id="Editbox27" style="position:absolute;left:208px;top:1341px;width:198px;height:23px;line-height:23px;z-index:75;" name="allowance" value="" autocomplete="on">
<div id="wb_Text44" style="position:absolute;left:10px;top:1370px;width:171px;height:16px;z-index:76;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong><u>Educational Details</u></strong></span></div>
<div id="wb_Text45" style="position:absolute;left:22px;top:1421px;width:160px;height:16px;z-index:77;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Qualification1:</span></div>
<select name="qual1" size="1" id="Combobox13" style="position:absolute;left:213px;top:1419px;width:200px;height:25px;z-index:78;">
<option value="phd">PHD</option>
<option value="mtech">M.Tech</option>
<option value="ms">M.S</option>
</select>
<div id="wb_Text50" style="position:absolute;left:31px;top:1821px;width:171px;height:16px;z-index:79;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong><u>Experience Details</u></strong></span></div>
<div id="wb_Text51" style="position:absolute;left:13px;top:1862px;width:189px;height:16px;z-index:80;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Teaching Experience in Years:</span></div>
<input type="text" id="Editbox29" style="position:absolute;left:215px;top:1866px;width:198px;height:23px;line-height:23px;z-index:81;" name="te" value="">
<div id="wb_Text52" style="position:absolute;left:9px;top:1912px;width:189px;height:16px;z-index:82;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Total work Experience in Years:</span></div>
<input type="text" id="Editbox30" style="position:absolute;left:216px;top:1902px;width:198px;height:23px;line-height:23px;z-index:83;" name="tte" value="">
<input type="text" id="Editbox31" style="position:absolute;left:215px;top:1944px;width:198px;height:23px;line-height:23px;z-index:84;" name="re" value="">
<div id="wb_Text54" style="position:absolute;left:23px;top:2002px;width:171px;height:16px;z-index:85;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong><u>Other Details:</u></strong></span></div>
<div id="wb_Text55" style="position:absolute;left:14px;top:2038px;width:189px;height:16px;z-index:86;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Bank Account Number:</span></div>
<input type="text" id="Editbox32" style="position:absolute;left:220px;top:2031px;width:198px;height:23px;line-height:23px;z-index:87;" name="bankac" value="">
<div id="wb_Text56" style="position:absolute;left:22px;top:2082px;width:189px;height:16px;z-index:88;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Patents:</span></div>
<textarea name="patents" id="TextArea2" style="position:absolute;left:224px;top:2071px;width:198px;height:98px;z-index:89;" rows="5" cols="27"></textarea>
<select name="isph" size="1" id="Combobox17" style="position:absolute;left:223px;top:2186px;width:200px;height:25px;z-index:90;">
<?php 
if ($row[61]=='yes')
{echo "<option value='yes' selected='selected'>yes</option>   <option value='no'>no</option> ";}
if ($row[61]=='no')
{echo "<option value='no' selected='selected'>No</option>   <option value='yes'>yes</option> ";}
?>
</select>
<input type="text" id="Editbox33" style="position:absolute;left:210px;top:1252px;width:197px;height:19px;line-height:19px;z-index:91;" name="payscale" value="" autocomplete="off">
<div id="wb_Text34" style="position:absolute;left:16px;top:1457px;width:98px;height:16px;z-index:92;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Year of passing: </span></div>
<input type="text" id="Editbox34" style="position:absolute;left:125px;top:1455px;width:42px;height:18px;line-height:18px;z-index:93;" name="yopq1" value="">
<input type="text" id="Editbox35" style="position:absolute;left:265px;top:1456px;width:43px;height:18px;line-height:18px;z-index:94;" name="pomq1" value="">
<div id="wb_Text59" style="position:absolute;left:188px;top:1459px;width:78px;height:16px;z-index:95;">
<span style="color:#000000;font-family:Arial;font-size:13px;">%of marks : </span></div>
<input type="text" id="Editbox39" style="position:absolute;left:427px;top:1493px;width:143px;height:18px;line-height:18px;z-index:96;" name="nouq1" value="">
<input type="text" id="Editbox37" style="position:absolute;left:126px;top:1495px;width:127px;height:18px;line-height:18px;z-index:97;" name="noiq1" value="">
<button id="AdvancedButton1" type="submit" name="" value="" style="position:absolute;left:116px;top:2240px;width:150px;height:34px;z-index:98;"><div style="text-align:center"><span style="color:#000000;font-family:Arial;font-size:13px">Submit</span></div></button>
<div id="wb_Text53" style="position:absolute;left:13px;top:1951px;width:189px;height:16px;z-index:99;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Research Experience in Years:</span></div>
<div id="wb_Text61" style="position:absolute;left:339px;top:1459px;width:111px;height:16px;z-index:100;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mode of study :</span></div>
<div id="wb_Text62" style="position:absolute;left:14px;top:1498px;width:111px;height:16px;z-index:101;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of Institute :</span></div>
<div id="wb_Text63" style="position:absolute;left:305px;top:1497px;width:125px;height:16px;z-index:102;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of University: </span></div>
<div id="wb_Text35" style="position:absolute;left:21px;top:1542px;width:160px;height:16px;z-index:103;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Qualification2:</span></div>
<div id="wb_Text36" style="position:absolute;left:15px;top:1578px;width:98px;height:16px;z-index:104;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Year of passing: </span></div>
<input type="text" id="Editbox28" style="position:absolute;left:124px;top:1576px;width:42px;height:18px;line-height:18px;z-index:105;" name="yopq2" value="">
<div id="wb_Text46" style="position:absolute;left:187px;top:1580px;width:78px;height:16px;z-index:106;">
<span style="color:#000000;font-family:Arial;font-size:13px;">%of marks : </span></div>
<input type="text" id="Editbox36" style="position:absolute;left:264px;top:1577px;width:43px;height:18px;line-height:18px;z-index:107;" name="pomq2" value="">
<div id="wb_Text47" style="position:absolute;left:338px;top:1580px;width:111px;height:16px;z-index:108;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mode of study :</span></div>
<div id="wb_Text48" style="position:absolute;left:304px;top:1618px;width:125px;height:16px;z-index:109;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of University: </span></div>
<div id="wb_Text49" style="position:absolute;left:13px;top:1619px;width:111px;height:16px;z-index:110;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of Institute :</span></div>
<div id="wb_Text58" style="position:absolute;left:25px;top:1671px;width:160px;height:16px;z-index:111;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Other Qualification:</span></div>
<div id="wb_Text60" style="position:absolute;left:19px;top:1707px;width:98px;height:16px;z-index:112;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Year of passing: </span></div>
<input type="text" id="Editbox43" style="position:absolute;left:129px;top:1705px;width:42px;height:18px;line-height:18px;z-index:113;" name="yopq3" value="">
<div id="wb_Text64" style="position:absolute;left:191px;top:1709px;width:78px;height:16px;z-index:114;">
<span style="color:#000000;font-family:Arial;font-size:13px;">%of marks : </span></div>
<input type="text" id="Editbox44" style="position:absolute;left:268px;top:1706px;width:43px;height:18px;line-height:18px;z-index:115;" name="pomq3" value="">
<div id="wb_Text65" style="position:absolute;left:342px;top:1709px;width:111px;height:16px;z-index:116;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mode of study :</span></div>
<div id="wb_Text66" style="position:absolute;left:308px;top:1747px;width:125px;height:16px;z-index:117;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of University: </span></div>
<div id="wb_Text67" style="position:absolute;left:17px;top:1748px;width:111px;height:16px;z-index:118;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Name of Institute :</span></div>
<select name="mosq1" size="1" id="Combobox11" style="position:absolute;left:436px;top:1456px;width:96px;height:21px;z-index:119;">
<option selected value="fulltime">full time </option>
<option value="distance">distance</option>
</select>
<select name="qual2" size="1" id="Combobox9" style="position:absolute;left:214px;top:1538px;width:200px;height:25px;z-index:120;">
<?php 
if ($row[44]=='phd')
{echo "<option value='phd' selected='selected'>PHD</option>   <option value='mtech'>Mtech</option><option value='ms'>M.S</option> ";
}
if ($row[44]=='mtech')
{echo "<option value='mtech'>Mtech</option> <option value='phd' selected='selected'>PHD</option> <option value='ms'>M.S</option> ";
}
if ($row[44]=='ms')
{echo "<option value='ms'>M.S</option><option value='mtech'>Mtech</option> <option value='phd' selected='selected'>PHD</option> ";
}

?>
</select>
<select name="qual3" size="1" id="Combobox10" style="position:absolute;left:218px;top:1665px;width:200px;height:25px;z-index:121;">
<option value="phd">PHD</option>
<option value="mtech">M.Tech</option>
<option value="ms">M.S</option>
</select>
<select name="mosq2" size="1" id="Combobox12" style="position:absolute;left:441px;top:1577px;width:96px;height:21px;z-index:122;">
<option selected value="fulltime">full time </option>
<option value="distance">distance</option>
</select>
<select name="mosq3" size="1" id="Combobox14" style="position:absolute;left:441px;top:1705px;width:96px;height:21px;z-index:123;">
<option selected value="fulltime">full time </option>
<option value="distance">distance</option>
</select>
<input type="text" id="Editbox38" style="position:absolute;left:130px;top:1613px;width:127px;height:18px;line-height:18px;z-index:124;" name="noiq2" value="">
<input type="text" id="Editbox40" style="position:absolute;left:132px;top:1744px;width:127px;height:18px;line-height:18px;z-index:125;" name="noiq3" value="">
<input type="text" id="Editbox41" style="position:absolute;left:433px;top:1615px;width:143px;height:18px;line-height:18px;z-index:126;" name="nouq2" value="">
<input type="text" id="Editbox42" style="position:absolute;left:435px;top:1742px;width:143px;height:18px;line-height:18px;z-index:127;" name="nouq3" value="">
<div id="wb_Text57" style="position:absolute;left:10px;top:2190px;width:189px;height:16px;z-index:128;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Is Physically handicapped:</span></div>
<div id="wb_Text1" style="position:absolute;left:19px;top:12px;width:171px;height:16px;z-index:129;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong><u>Personal Details</u></strong></span></div>
</form>
</div>
</body>
</html>
