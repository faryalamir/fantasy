<?php 

$con = mysql_connect("localhost","root","");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
	mysql_select_db("diaryproject",$con) or  die('Could not found daatabase!'. mysql_error());
   
?>