<?php
session_start();
require_once("file/connect.php");
if(isset($_POST['btn']))
{
$login_name=$_POST["username"];
$pass=$_POST["password"];
$qur="SELECT * FROM users WHERE user_name='$login_name' AND pass_word='$pass'";
$result=mysql_query($qur);
$count = mysql_num_rows($result);
if($count==1){
$_SESSION["uname"]=$login_name;
header( 'Location: main.php' ) ;}
else if($count == 0)
{header( 'Location: login.php' ) ;}
}
?>
<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript" language="javascript" >
function validate()
{
	var x=document.forms["log_form"]["username"].value
if ( x == ""|| x ==null )
		{alert("Username is empty!!");
			return false;}
	
		var x=document.forms["log_form"]["password"].value
if ( x == ""|| x ==null )
		{alert("Please enter password!!");
			return false;}
}
</script>
</head>

<body bgcolor="#605120">
<form  name="log_form" action="login.php" method="post" onSubmit="return validate()">
<table width="300" align="center">
  <tr>
    <td>User Name: </td>
    <td><input size="25" name="username" type="text" /></td>
  </tr>
  <tr>
    <td>Password: </td>
    <td><input size="25" type="password" name="password" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="    Login    " name="btn" id="btn" /></td>
  </tr>
</table>
</form>
<form action="index.php">
<table align="center">
<th>
<input type="submit" value="Back"/>
</th>
</table>
</form>
</body>
</html>