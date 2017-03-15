<?php
include('c.php');

session_start();
error_reporting(E_ALL);
 ini_set('display_errors', 'On');
?>
<?php
$username=$_REQUEST['username'];
echo $username;
$sql="select * from userdiary where username='$username'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	$n=$row['username'];
	$sql="delete from userdiary where username='$n'";
	mysql_query($sql);
}
$sql="delete from profiles where username='$username'";
mysql_query($sql);
$sql="delete from userlogin where username='$username'";
if(mysql_query($sql))
{
	header('location:admin.php?msg=Record deleted successfully');
	exit;
}
/*if(mysql_query($sql)
{
	echo $sql;
	
	$sql="delete from userlogin,profile where username='$username'";
echo $sql;
if(mysql_query($sql))
{
	echo $sql;
	header('location:showall.php?msg=Record Deleted Successfully');
	exit;
}
}*/
?>
