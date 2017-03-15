<?php
include('c.php');
include('header.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
session_start();
?>
<?php
$username=$_SESSION['username'];
$sql="select * from profiles where username='$username'";
if(mysql_query($sql))
{
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);?>
    <br />
<table width="18%" align="center" border="1">
<form method="post" action="confirmedituser.php">
<input type="hidden" value="user" name="user" />
<tr><td>User Name:</td><td> <input type="text" name="username" value="<?php echo $row['username'];?>" readonly="readonly"/></td></tr>
<tr><td>First Name:</td><td> <input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastname" value="<?php echo $row['lastname'];?>" /></td></tr>
<tr><td>Email:</td><td> <input type="text" name="emailaddress" value="<?php echo $row['emailaddress'];?>"/></td></tr>
<tr><td>Postal Address:</td><td><input type="text" name="postaladdress" value="<?php echo $row['postaladdress'];?>" /></td></tr>
<tr><td>Password:</td><td> <input type="password" name="password" value="<?php echo $row['password'];?>"/></td></tr>
<tr><td>Qualification:</td><td><input type="text" name="qualification" value="<?php echo $row['qualification'];?>" /></td></tr>
<tr><td>Work At:</td><td> <input type="text" name="workat" value="<?php echo $row['workat'];?>"/></td></tr>

<tr><td align="center">
<center><input type="submit" value="Edit"></center></td>
</tr></form></table>
<?php
}
else
{
	header('location:users.php?msg=There is an error in Query');
}
?>