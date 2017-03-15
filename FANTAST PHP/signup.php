<html>
<head>
<title>SignUp</title>
<script type="text/javascript" language="javascript" >
function validate()
{
	var x=document.forms["employer"]["fname"].value
if ( x == ""|| x ==null )
		{alert("first name is empty!!");
			return false;}
	
		var x=document.forms["employer"]["lname"].value
if ( x == ""|| x ==null )
		{alert("last name is empty!!");
			return false;}
		var x=document.forms["employer"]["username"].value
if ( x == ""|| x ==null )
		{alert("username is empty!!");
			return false;}
	
		var i=document.forms["employer"]["password"].value
if ( x == ""|| x ==null )
		{alert("password is empty!!");
			return false;}
	var o=document.forms["employer"]["confirm_password"].value
if ( x == ""|| x ==null )
		{alert("password is empty!!");
			return false;}
if(i!=o)
{
alert("your passsword do naot match");return false;document.forms["employer"]["confirm_password"].focus();document.forms["employer"]["password"].focus();
}
	
	if (!document.employer.gender[0].checked && !document.employer.gender[1].checked)
	{
	alert("Please choose gender");
	return false;
	}

	var y=document.forms["employer"]["email"].value
		var atpos=y.indexOf("@");
		var dotpos=y.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
 	 {
  	alert("Not a valid e-mail address");
  	return false;
  	}
}
</script>
</head>
<body bgcolor="#605120">
</body>
</html>
<?php

	 require_once("file/connect.php");

if (!isset($_POST['submit'])) { // If the form has not been submitted.
	echo "<form action=\"signup.php\" method=\"POST\" name= \"employer\" onSubmit=\"return validate()\">";
	echo "<table align=\"center\">";
	echo "<tr>";
	echo "<td  align=\"center\" colspan=\"2\">Register:</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"50%\">First Name:</td><td width=\"50%\"><input name=\"fname\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"50%\">Last Name:</td><td width=\"50%\"><input name=\"lname\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"50%\">Username:</td><td width=\"50%\"><input name=\"username\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"50%\">Password:</td><td width=\"50%\"><input name=\"password\" type = \"password\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"50%\">Confirm Password:</td><td width=\"50%\"><input name=\"confirm_password\" type = \"password\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Gender:</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\" >Male:</td><td width=\"50%\"><input name=\"gender\" type=\"radio\" value = \"male\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\"> Female </td><td width=\"50%\"><input name=\"gender\" type=\"radio\" value = \"female\" />";
	echo "</tr>";	  	
	echo "<tr>";
	echo "<td width=\"50%\">Email:</td><td width=\"50%\"><input name=\"email\" size=\"18\" type=\"text\" />";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"center\"  colspan=\"2\"><input type=\"submit\" name=\"submit\" value=\"signup\"</td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	
	echo "<form action=\"index.php\" >";
	echo "<table align=\"center\">";
	echo "<tr>";
	echo "<th>";
	echo "<input type=\"submit\" value=\"Back\"/>";
	echo "</th>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	
	
	
	
	
} else { // The form has been submitted.
	echo $username = $_POST['username'];
	echo $email = $_POST['email'];
	
	
	
	$q = mysql_query("SELECT * FROM users WHERE user_name = '$username' OR emailid = '$email'") or die (mysql_error()); // mySQL Query
	$r = mysql_num_rows($q); // Checks to see if anything is in the db.
 
	if ($r > 0) { // If there are users with the same username/email.
		exit("That username/email is already registered!");
	} else {
		
		$query="INSERT INTO users (firstname,lastname,user_name,pass_word,genderf,emailid) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[gender]','$_POST[email]')";

		mysql_query($query) or die (mysql_error()); // Inserts the user.
		header("Location: login.php"); // Back to login.
	}
}

?>