
<?php
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
session_start();
?>
<?php
$username= $_SESSION["username"];
$sql="select * from userdiary where username='$username'";

if(mysql_query($sql))
{
	$result=mysql_query($sql);
	$row=mysql_num_rows($result);
	if($row>0)
	{
		header('location:users.php?msg=Already updated now you can edit');
	}
}

$f1= $_POST["F"];
$f2= $_POST["Field2"];
$f3= $_POST["Field3"];
$f4= $_POST["Field4"];
$f5= $_POST["Field5"];
$f6= $_POST["Field6"];
$f7= $_POST["Field7"];
$f8= $_POST["Field8"];
$f9= $_POST["Field9"];
$f10= $_POST["Field10"];
$f11= $_POST["Field11"];
$f12= $_POST["Field12"];
$f13= $_POST["Field13"];
$f14= $_POST["Field14"];
$f15= $_POST["Field15"];
$f16= $_POST["Field16"];
$f17= $_POST["Field17"];
$f18= $_POST["Field18"];
$f19= $_POST["Field19"];
$f20= $_POST["Field20"];
$f21= $_POST["Field21"];
$f22= $_POST["Field22"];
$f23= $_POST["Field23"];
$f24= $_POST["Field24"];
$f25= $_POST["Field25"];
$f26= $_POST["Field26"];
$username= $_SESSION["username"];
$date=date('m/d/Y');
$sql="insert into userdiary values('$username','$date','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13','$f14','$f15','$f16','$f17','$f18','$f19','$f20','$f21','$f22','$f23','$f24','$f25','$f26')";
if(mysql_query($sql))
{
	
header('location:users.php?msg=updated successfully');
}
?>
