<?php
session_start();
if(isset($_POST['btn']))
{
$usname=$_SESSION['uname'];
require_once("file/connect.php");
$qur="UPDATE users SET pass_word='$_POST[new_pass]' WHERE user_name='$usname' AND pass_word='$_POST[cur_pass]'";
if(mysql_query($qur))
{
$_SESSION['uname']=$usname;
header("Location: main.php");
}
else
{
header("Location: changepassword.php");
}
}
?>
<script langauge="JavaScript">
</script>
<html>
<head>
<title>Change Password</title>
</head>

<body>
<form action="changepassword.php" method="post">
<table width="300" align="center">
  <tr>
    <td>Current Password</td>
    <td><input name="cur_pass" type="password" /></td>
  </tr>
  <tr>
    <td>New Password</td>
    <td><input name="new_pass" type="password" /></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input name="con_pass" type="password" /></td>
  </tr>
</table>
<table align="center">
<tr><td><input name="sumbit" type="submit" id="btn" name="btn" value="Change Password"></td></tr>
</table>
</form>
</body>
</html>
