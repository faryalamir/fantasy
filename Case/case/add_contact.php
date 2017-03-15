<?php
session_start();
require_once("file/connect.php");
$usname=$_SESSION['uname'];
$qur="INSERT INTO contacts(chk_ref,fname,lname,contactno,email,address) VALUES ('$usname','$_POST[first_name]','$_POST[last_name]','$_POST[contact_no]','$_POST[cont_email]','$_POST[cont_address]')";
if(mysql_query($qur))
{
$_SESSION['uname']=$usname;
header("Location: main.php");
}
else
{
header("Location: add_contact.htm");
}
?>