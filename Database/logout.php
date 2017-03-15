
<?php
include('c.php');
session_start();
error_reporting(E_ALL); ini_set('display_errors', 'On');
?>
<?php
session_destroy();
header('location:index.php?msg=Logout successfully');
exit;
?>