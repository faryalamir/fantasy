
<?php
session_start();
include('c.php');
error_reporting(E_ALL); ini_set('display_errors', 'On');
?>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
	background: #563c55 url(images/blurred.jpg) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	color: #FFF;
			}
			.container > header h1,
			.container > header h2 {
					}
		.b {
	font-family: "Arial Black", Gadget, sans-serif;
	color: #FFF;
}
        </style>
    </head>
<body>
        <div class="container">
		
			<!-- Codrops top bar -->
            

            <section class="main"><br><br><br><br><br><br><br><br><br><br>
              <br>
            <br><br>
		  <form class="form-3" method="post" action="check.php">
				    <p class="clearfix">
				        <label for="login">Username</label>
				       
                       <input type="text" name="username" id="username" placeholder="Username" /><font color="red"> <?php if(isset($_SESSION['error']['username'])) echo $_SESSION['error']['username'];?>  </p>
				    <p class="clearfix">
				        <label for="password">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> <?php if(isset($_SESSION['error']['password'])) echo $_SESSION['error']['password'];?></p>
                       
				    
				    <p class="clearfix">
				        <input type="submit" name="submit" value="Sign in">
                      
				    </p>      
                    
			  </form>​
             
		  </section>
</div>
             <center>
              <center><a href="2to3.php" class="b">Register</a></center>
              <center>
              
                        
  			 
             
            
            <?php
if(isset($_REQUEST['msg']))
{
    echo $_REQUEST['msg'];    
	
}
?>
 </center>			
       
</body>
</html>
<?php
session_unset();
?>