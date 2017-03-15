<?php
include('header.php');
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
<head>
 <!DOCTYPE html>
<html>
<head>
  <link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
</head>
<body>
<center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form method="post" action="editbydate.php">
    <input id="datepicker" name="date" value="Click here" />
    <input type="submit" value="submit">
</form></center>
</body>
</html>
 