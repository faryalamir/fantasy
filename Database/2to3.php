<?php 
session_start();
include("c.php");
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
?>
<?php
$F=$_POST['firstname'];
$L= $_POST['lastname'];
$U= $_POST['username'];
$P=md5($_POST['password']);
$PO=$_POST['postaladdress'];

$E=$_POST['emailaddress'];
$Q=$_POST['qualification'];
$W=$_POST['workat'];

$_SESSION['add']['firstname']=$_POST['firstname'];
$_SESSION['add']['lastname']=$_POST['lastname'];
$_SESSION['add']['username']=$_POST['username'];
$_SESSION['add']['password']=$_POST['password'];

$_SESSION['add']['emailaddress']=$_POST['emailaddress'];

$_SESSION['add']['postaladdress']=$_POST['postaladdress'];

$_SESSION['add']['qualification']=$_POST['qualification'];

$_SESSION['add']['workat']=$_POST['workat'];





$flg=false;
if($_POST['firstname']=='')
{
	$flg=true;
	$_SESSION['error']['firstname']='Please Enter your first name';
}
if($_POST['lastname']=='')
{
	$flg=true;
	$_SESSION['error']['lastname']='Please Enter your last name';
}

if($_POST['username']=='')
{
	$flg=true;
	$_SESSION['error']['username']='Please Enter your user name';
}

if($_POST['password']=='')
{
	$flg=true;
	$_SESSION['error']['password']='Please Enter your password';
}
if($_POST['emailaddress']=='')
{
	$flg=true;
	$_SESSION['error']['emailaddress']='Please Enter your emailaddress';
}
if($_POST['postaladdress']=='')
{
	$flg=true;
	$_SESSION['error']['postaladdress']='Please Enter your postal address';
}
if($_POST['qualification']=='')
{
	$flg=true;
	$_SESSION['error']['qualification']='Please Enter your work at info';
}
if($_POST['workat']=='')
{
	$flg=true;
	$_SESSION['error']['workat']='Please Enter your work at info';
}
   
   
if($flg==true)
{
	echo $flg;
	header('location:2ndpage.php?msg=please enter all fields to proceed:!');
	exit;
}
else
{
	$sql= "INSERT INTO userlogin  (username,password)
VALUES 
('$U','$P')";
mysql_query($sql);
	$sql= "INSERT INTO profiles (username,firstname,lastname,emailaddress,postaladdress,password,qualification,workat)
VALUES 
('$U','$F','$L','$E','$PO','$P','$Q','$W')";
echo $sql;
mysql_query($sql);
header("location:index.php?msg=Registered successfully");
exit;
}
?>
<?php
?>
