<?php
include('c.php');
error_reporting(E_ALL);
 ini_set('display_errors', 'On');
session_start();
?>
<?php
$username=$_REQUEST['username'];

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$emailaddress=$_REQUEST['emailaddress'];
$postaladdress=$_REQUEST['postaladdress'];
$password=$_REQUEST['password'];
$password=md5($password);

$qualification=$_REQUEST['qualification'];
$workat=$_REQUEST['workat'];
$sql="Update profiles set  username='$username',firstname='$firstname',lastname='$lastname',emailaddress='$emailaddress',postaladdress='$postaladdress',password='$password',qualification='$qualification',workat='$workat' where username='$username'";

if(mysql_query($sql))
{
	$sql1="update userlogin set username='$username',password='$password' where username='$username'";
	mysql_query($sql1);
	header('location:admin.php?msg=Record Changed Successfully');
	exit;

}
?>
<?php
session_unset();
?>