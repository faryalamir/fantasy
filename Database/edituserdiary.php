<?php
include('headeradmin.php');
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

<form method="post" action="confirmud.php">

<table border="1">
<tr>
<td>

Enter Name<input type="text" name="username" /></td>
</tr>
<tr>
<td>Select Date
 <input id="datepicker" name="date" value="Click here" />
</td></tr>
<tr><td><input type="submit" value="Submit" /></td></tr></table></form></table>
</body>
</html>