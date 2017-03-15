
<?php
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
session_start();
?>

<?php 
$id=$_SESSION['id'];
$sql="select * from check_user where id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);


$f1= $_POST["Field1"];
$f2= $_POST["Field2"];
$f3= $_POST["Field3"];
$f4= $_POST["Field4"];
$f5= $_POST["Field5"];
$f6= $_POST["Field6"];
$f7= $_POST["Field7"];
$ff1=$row['Field1'].$f1;
$ff2=$row['Field2'].$f2;
$ff3=$row['Field3'].$f3;
$ff4=$row['Field4'].$f4;
$ff5=$row['Field5'].$f5;
$ff6=$row['Field6'].$f6;
$ff7=$row['Field7'].$f7;

$sql="update check_user set Field1='$ff1',Field2='$ff2',Field3='$ff3',Field4='$ff4',Field5='$ff5',Field6='$ff6',Field7='$ff7' where id='$id'";
mysql_query($sql);
header('location:users.php?msg=updated successfully');
?>
