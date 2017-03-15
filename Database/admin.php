<?php
include('c.php');
include('headeradmin.php');
error_reporting(E_ALL);
 ini_set('display_errors', 'On');
session_start();
?>

<?php $sql="select * from profiles";
if(mysql_query($sql))
{
	$result=mysql_query($sql);
?>
<br>
<table border="0" align="center" bgcolor="#F0F8FF">
<th>User_Name</th><th>Action</th>
<?php
	while($row=mysql_fetch_array($result))
	{?>
    	<tr>
       
        
        <td width=50%"><?php
		echo $row['username'];
		$username=$row['username'];
		?>
        </td>
        <td width=40%">  <a href="edit.php?username=<?php echo $username;?>">Edit</a><td width=40%">
        <a href="delete.php?username=<?php echo $username;?>">Delete</a></td>
        
     </td> </tr><?php
	}

}

?>
</table>
<center><?php
if(isset($_REQUEST['msg']))
echo $_REQUEST['msg'];
?></center>