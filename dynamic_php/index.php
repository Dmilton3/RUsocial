<!-- This is the starting page to RUsocial for login purposes and user registration. 
     Used code from Php Tutorial EnvatoTuts+ Tom Cameron for NetTuts --> 
<?php 
session_start(); 
//Establishes connection to the database 
include "connection.php";    ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">  

<head>  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

<title>RUsocial Login</title>

<link rel="stylesheet" href="style.css" type="text/css" />

</head>  
<body>  
<div id="main">

<?php

if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     

    $checklogin = mysql_query("SELECT * FROM Users WHERE Email = '".$email."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['Email'];
        $username = $row['username']; 
       
        $_SESSION['Email'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
        if($username == "null"){

            header("Location: UserCreation.php"); 

        }
        else
        {

        $_SESSION['username'] = $username;

        header("Location: RUsocial.php"); 
    
        } 
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
     
   <h1>Member Login</h1>
     
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
     
    <form method="post" action="index.php" name="loginform" id="loginform">
    <fieldset>
        <label for="email">Email:</label><input type="text" name="email" id="email" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>
     
   <?php
}
?>
 
</div>
</body>
</html>