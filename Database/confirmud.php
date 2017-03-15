<?php
include('headeradmin.php');
include('c.php');
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
session_start();
?>
<?php
$username=$_REQUEST['username'];
$d=$_REQUEST['date'];

$_SESSION['username']=$username;
$_SESSION['date']=$d;
$sql="select * from userdiary where username='$username' and date='$d'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<table width="18%" align="center" border="1">
<form method="post" action="confirmeditbydate.php">
<input type="hidden" name="date" value="<?php $date;?>" />
<tr><td>User_Name:</td><td><input type="text" name="username" value="<?php echo $row['username'];?>" readonly="readonly"/></td></tr>
<tr><td>Field1:</td><td><textarea rows="4" cols="84" name="field1" /> <?php echo $row['field1'];?> </textarea></td></tr>
<tr><td>Field2:</td><td><textarea rows="4" cols="84" name="field2"/> <?php echo $row['field2'];?></textarea></td></tr>
<tr><td>Field3:</td><td><textarea rows="4" cols="84" name="field3" /><?php echo $row['field3'];?></textarea></td></tr>
<tr><td>Field4:</td><td><textarea rows="4" cols="84" name="field4" /><?php echo $row['field4'];?></textarea></td></tr>
<tr><td>Field5:</td><td><textarea rows="4" cols="84" name="field5" /><?php echo $row['field5'];?> </textarea></td></tr>
<tr><td>Field6:</td><td><textarea rows="4" cols="84" name="field6" /><?php echo $row['field6'];?> </textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field7" /><?php echo $row['field7'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field8" /><?php echo $row['field8'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field9" /><?php echo $row['field9'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field10" /><?php echo $row['field10'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field11" /><?php echo $row['field11'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field12" /><?php echo $row['field12'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field13" /><?php echo $row['field13'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field14" /><?php echo $row['field14'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field15" /><?php echo $row['field15'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field16" /><?php echo $row['field16'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field17" /><?php echo $row['field17'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field18" /><?php echo $row['field18'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field19" /><?php echo $row['field19'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field20" /><?php echo $row['field20'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field21" /><?php echo $row['field21'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field22" /><?php echo $row['field22'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field23" /><?php echo $row['field23'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field24" /><?php echo $row['field24'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field25" /><?php echo $row['field25'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field26" /><?php echo $row['field26'];?></textarea></td></tr>

<tr><td align="center">
<center><input type="submit" value="Edit"></center></td>
</tr></form></table>
