
	function validate()
	{
	if ( document.employer.fname.value == "" )
		{
			alert("first name is empty!!");
			return false;
		}
	if ( document.employer.lname.value == "" )
		{
			alert("last name is empty!!");
			return false;
		}
	if ( document.employer.username.value == "" )
		{
			alert("user name is empty!!");
			return false;
		}

	if(document.employer.password.value == "")	
	{	
		alert("password is empty!!");
		document.employer.password.focus();
		document.employer.confirm_password.focus();
			return false;
	}	
	if(document.employer.confirm_password.value == "")	
	{	
		alert("confirm password is empty!!");
		document.employer.password.focus();
		document.employer.confirm_password.focus();
			return false;
	}	

	if(document.employer.password.value! == document.employer.confirm_password.value)
	{
		alert("New Password and Confirm new Password doesnt match");
		document.employer.confirm_password.focus();
		return false;
	}


	if (!document.employer.gender[0].checked && !document.employer.gender[1].checked)
	{
	alert("Please choose gender");
	return false;
	}
	}
