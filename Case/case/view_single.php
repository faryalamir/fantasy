
<?php
session_start();
$chk=$_SESSION['uname'];
require_once("file/connect.php");
$qur = "SELECT * FROM contacts WHERE chk_ref='$chk' AND fname='$_POST[fnam]' AND lname='$_POST[lnam]'";
$result = mysql_query($qur);

echo "<table border= '5' align='center'>";
echo "<tr>";
echo "<th>First Name :</th>" ;
echo "<th>Last Name :</th>";
echo "<th>Contact no .</th>";
echo "<th>Email-id : </th>";
echo "<th>Address : </th>";
while ($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" .$row['fname'] . "</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['contactno']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";
?>
<html>
<body>
<form action="main.php">
<table align="center">
<th>
<input type="submit" value="Home"/>
</th>
</table>
</form>
</body>
</html>