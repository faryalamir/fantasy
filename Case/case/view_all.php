<?php
session_start();
$chk=$_SESSION['uname'];
require_once("file/connect.php");
$qur = "SELECT * FROM contacts WHERE chk_ref='$chk'";
$result = mysql_query($qur);
echo "<table border= '5' align='center'>";
echo "<tr>";
echo "<th>First Name :</th>" ;
echo "<th>Last Name :</th>";
echo "<th>Contact no .</th>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" .$row["fname"] . "</td>";
echo "<td>".$row["lname"]."</td>";
echo "<td>".$row["contactno"]."</td>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["address"]."</td>";
echo "</tr>";
}
mysql_free_result($result);
echo "</table>"
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
