<?php
session_start();
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
?>

 <?php
  if(!isset($_SESSION['username'])|| !isset($_SESSION['password']))
  {
      header("location:index.php?msg=Sorry you are not     login!Try Again");
      exit;
  }
  else
  {
	  echo 'hello '. $_SESSION['username'];
	  include('header.php');
	 ?><br><br><br><br><br><br><br><br>
    <font color= color= color= color="#66CCCC" > <center> <?php if(isset($_REQUEST['msg']))
	  {
		  echo $_REQUEST['msg'];
	  }
  }
  ?> 

</center>
 </font>

