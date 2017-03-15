
<?php
include('c.php');
session_start();
error_reporting(E_ALL);
 ini_set('display_errors', 'On');
?>
<?php
$username=$_SESSION['username'];
$date=$_SESSION['date'];

$field1=$_REQUEST['field1'];

$field2=$_REQUEST['field2'];
$field3=$_REQUEST['field3'];
$field4=$_REQUEST['field4'];
$field5=$_REQUEST['field5'];
$field6=$_REQUEST['field6'];
$field7=$_REQUEST['field7'];
$field8=$_REQUEST['field8'];
$field9=$_REQUEST['field9'];
$field10=$_REQUEST['field10'];
$field11=$_REQUEST['field11'];
$field12=$_REQUEST['field12'];
$field13=$_REQUEST['field13'];
$field14=$_REQUEST['field14'];
$field15=$_REQUEST['field15'];
$field16=$_REQUEST['field16'];
$field17=$_REQUEST['field17'];
$field18=$_REQUEST['field18'];
$field19=$_REQUEST['field19'];
$field20=$_REQUEST['field20'];
$field21=$_REQUEST['field21'];
$field22=$_REQUEST['field22'];
$field23=$_REQUEST['field23'];
$field24=$_REQUEST['field24'];
$field25=$_REQUEST['field25'];
$field26=$_REQUEST['field26'];


$sql="update userdiary set  field1='$field1',field2='$field2',field3='$field3',field4='$field4',field5='$field5',field6='$field6',field7='$field7',field8='$field8',field9='$field9',field10='$field10',field11='$field11',field12='$field12',field13='$field13',field14='$field14',field15='$field15',field16='$field16',field17='$field17',field18='$field18',field19='$field19',field20='$field20',field21='$field21',field22='$field22',field23='$field23',field24='$field24',field25='$field25',field26='$field26' where username='$username' and date='$date'";
if(mysql_query($sql))
{
	
	header('location:admin.php?msg=Record Changed Successfully');
	exit;
}
?>
<?php

?>