<?php
session_start();
include("c.php");
error_reporting(E_ALL);
 ini_set('display_errors', 'On');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$u=$_POST['username'];
$pu=$_POST['password'];
$p=md5($_POST['password']);
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=md5($_POST['password']);
$flg=false;
if($_SESSION['username']=='')
{
	$flg=true;
	$_SESSION['error']['username']='Enter your username';
}
if($pu=='')
{
	$flg=true;
	$_SESSION['error']['password']='Enter your password';
}
if($flg==true)
{
	header('location:index.php');
	exit;
}
else
{
	
$sql="select * from userlogin where username='".$_SESSION['username']."' and  password='".$p."'";

	if(mysql_query($sql))
	{
		$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			
			
	
		if(mysql_num_rows($result)>0)
			{	
			
				if($row['username']=="admin")
				{
					header('location:adminv.php');
					exit;
				}	
		else
		{
			
			
		
			header("location:users.php");
			exit;
		}
	}
	else
	{
		header('location:index.php?msg=You are not registered');
		exit;
	}
	}
}
	
?></body></html>
<?php
session_unset();
?>
