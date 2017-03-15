<?php
include('c.php');
session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
?>
<?php
$username=$_REQUEST['username'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$emailaddress=$_REQUEST['emailaddress'];
$postaladdress=$_REQUEST['postaladdress'];
$password=$_REQUEST['password'];
$qualification=$_REQUEST['qualification'];
$workat=$_REQUEST['workat'];
$sql="Update profiles set  firstname='$firstname',lastname='$lastname',emailaddress='$emailaddress',postaladdress='$postaladdress',password='$password',qualification='$qualification',workat='$workat' where username='$username'";
if(mysql_query($sql))
{
	

	
	header('location:users.php?msg=Record Changed Successfully');
	exit;

}
?>
<?php
session_unset();
?>