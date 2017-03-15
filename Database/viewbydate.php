<?php
session_start();
include('header.php');
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
?>
<?php
$date=$_POST['date'];
$_SESSION['date']=$date;
$username=$_SESSION['username'];
$sql="select * from userdiary where username='$username' and date='$date'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<table width="18%" align="center" border="1">
<form method="post" action="confirmeditbydate.php">

<tr><td>Field1:</td><td><textarea rows="4" cols="84" name="field1" readonly="readonly"/> <?php echo $row['field1'];?> </textarea></td></tr>
<tr><td>Field2:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field2"/> <?php echo $row['field2'];?></textarea></td></tr>
<tr><td>Field3:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field3" /><?php echo $row['field3'];?></textarea></td></tr>
<tr><td>Field4:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field4" /><?php echo $row['field4'];?></textarea></td></tr>
<tr><td>Field5:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field5" /><?php echo $row['field5'];?> </textarea></td></tr>
<tr><td>Field6:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field6" /><?php echo $row['field6'];?> </textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field7" /><?php echo $row['field7'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field8" /><?php echo $row['field8'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field9" /><?php echo $row['field9'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field10" /><?php echo $row['field10'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field11" /><?php echo $row['field11'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field12" /><?php echo $row['field12'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field13" /><?php echo $row['field13'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field14" /><?php echo $row['field14'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field15" /><?php echo $row['field15'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field16" /><?php echo $row['field16'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field17" /><?php echo $row['field17'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field18" /><?php echo $row['field18'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field19" /><?php echo $row['field19'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field20" /><?php echo $row['field20'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field21" /><?php echo $row['field21'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field22" /><?php echo $row['field22'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field23" /><?php echo $row['field23'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field24" /><?php echo $row['field24'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" readonly="readonly" name="field25" /><?php echo $row['field25'];?></textarea></td></tr>
<tr><td>Field7:</td><td><textarea rows="4" cols="84" name="field26" /><?php echo $row['field26'];?></textarea></td></tr>

</form></table>
