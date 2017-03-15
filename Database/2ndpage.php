<?php
session_start();
?>
<body background="bgbody2.jpg">
<center><font color="#F0F8FF"><B>Please Enter the required fields and press submit to register</B></font></center>
<table width="18%" align="center" border="1" bgcolor="#CCCCCC" >

<form action="2to3.php" method="post">
<tr><td > First_Name:</td><td><input type="text" name="firstname" value="<?php if(isset($_SESSION['add']['firstname']))
  echo $_SESSION['add']['firstname']; ?>" /><?php if(isset($_SESSION['error']['firstname'])) echo $_SESSION['error']['firstname']; ?>
  </td></tr>
  
<tr><td >Last_Name:</td><td><input type="text" name="lastname" value="<?php if(isset($_SESSION['add']['lastname']))
  echo $_SESSION['add']['lastname']; ?>" /><?php if(isset($_SESSION['error']['lastname'])) echo $_SESSION['error']['lastname']; ?></td></tr>
  
  
  <tr><td> UserName:</td><td><input type="text" name="username" value="<?php if(isset($_SESSION['add']['username']))
  echo $_SESSION['add']['username']; ?>" /><?php if(isset($_SESSION['error']['username'])) echo $_SESSION['error']['username']; ?></td></tr>
  
  
<tr><td>Password</td><td><input type="password" name="password" value="<?php if(isset($_SESSION['add']['password']))
  echo $_SESSION['add']['password']; ?>" /><?php if(isset($_SESSION['error']['password'])) echo $_SESSION['error']['password']; ?></td></tr>
  <tr>
    <td>EmailAddress:</td>
    <td><input type="text" name="emailaddress" value="<?php if(isset($_SESSION['add']['emailaddress']))
  echo $_SESSION['add']['emailaddress']; ?>" /><?php if(isset($_SESSION['error']['emailaddress'])) echo $_SESSION['error']['emailaddress']; ?></td></tr>
  <tr>
    <td >PostalAddress:</td>
    <td><input type="text" name="postaladdress" value="<?php if(isset($_SESSION['add']['postaladdress']))
  echo $_SESSION['add']['postaladdress']; ?>" /><?php if(isset($_SESSION['error']['postaladdress'])) echo $_SESSION['error']['postaladdress']; ?></td></tr>
   <tr>
     <td >Qualification::</td>
     <td><input type="text" name="qualification" value="<?php if(isset($_SESSION['add']['qualification']))
  echo $_SESSION['add']['qualification']; ?>" /><?php if(isset($_SESSION['error']['qualification'])) echo $_SESSION['error']['qualification']; ?></td></tr>
   <tr>
     <td>Work At:</td>
     <td><input type="text" name="workat" value="<?php if(isset($_SESSION['add']['workat']))
  echo $_SESSION['add']['workat']; ?>" /><?php if(isset($_SESSION['error']['workat'])) echo $_SESSION['error']['workat']; ?></td></tr>

<tr >
  <td>Submit:</td><td><input type="submit"  value="submit" /></td></tr>
</form>
</table>

<?php
session_unset();
?>