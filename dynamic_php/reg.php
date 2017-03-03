<?php
  //  include('header.php'); 
?>
<?php
    ob_start(); 

    session_start(); 

    require_once('connection.php'); 

    ?>

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html14/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>RUsocial Login</title>
<style> 

     body {
         background-color: #FFF; 
     }

     #header {
         background-color: #006; 
         color: #FFF
         padding: 20px; 
     }

     #footer{
         background-color: #006; 
         color: #FFF;
         padding: 20px; 
     }

     #main {
         padding: 15px; 
         background-color: #FAF0E6;
         margin-right: 220px; 
         margin-top: 5px;
     }

     #login{
         padding: 10px; 
         padding-bottom: 15px;
         background-color: #E0FFFF; 
         width: 200px; 
         text-align: left; 
         float: right; 
         margin-left: 10px; 
         margin-right: 5px; 
         margin-top: 5px; 
     }

</style>        
</head>


<body> 
    <div id="header"><h2>RUsocial Login</h2></div>

<div id="login">
 <p>
<form action="     " method="post">

<table border="0">

<tr>
    <td>Name</td>
    <td align="center"><input type="text" name="username" size="30" /></td>
</tr>

<tr>
    <td>Password</td>
    <td align="center"><input type="text" name="password" size="30" /></td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

<tr>
    <td><a href="forgot_password.php">Forgot Password</a></td>
</tr>

</table>
</form>
</div>
<div id="main">

<?php

    //email verification 

    if(isset($_POST['submitted']))
    {

          $query = "SELECT Email FROM Users WHERE Email='$email'"; 
        $result = mysql_query ($query);

        if(mysql_num_rows($result) == 0)
        {
            $query = "INSERT INTO Users (Email, Password) VALUES ('$email', SHA('$password'))";

           

            mysql_close(); 

        }else{
             trigger_error("That email is already in use.");
        }
    }

    
    

     /*   if(preg_match('%^[A-Za-z0-9._\%-]+@[A-Za-z0-9._\%-][A-Za-z]{2,4}$%', 
        stripslashes(trim($_POST['email'])))) {
            $e = escape_data($_POST['email']); 
        }else {
            $e = FALSE; 
            echo '<p><font color="red" size="+1">Please enter valid email</font></p>'; 
        }

    */
    /*
        if(($_POST['password'] == $_POST['password2'])
            $p = escape_data($_POST['password']);  
        }else {
            $p = FALSE; 
            echo '<p><font color="red" size="+1">Passwords do not match</font></p>'; 
        }

    }
  */
/*
    //checking if email exists 

    if($e && $p){

        $query = "SELECT Email FROM Users WHERE Email='$e'"; 
        $result = mysql_query ($query) or trigger_error("That email is already in use."); 

        if(mysql_num_rows($result) == 0)
        {
            $query = "INSERT INTO Users (Email, Password) VALUES ('$e', SHA('$p'))";

            $result = mysql_query ($query) or trigger_error("An error has occured");


        }
    }    
*/
?>
<h1>New User</h1>

<form action="reg.php" method="post">

    <fieldset>
        <p><b>Email Address: </b><input type="text" name="email" size="40" maxlength="40" 
        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /></p>

          <p><b>Password: </b><input type="password" name="password" size="20"  
        value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" /></p>

          <p><b>Confirm Password: </b><input type="password" name="password2" size="20"  
        value="<?php if(isset($_POST['password2'])) echo $_POST['password2']; ?>" /></p>

     </fieldset>

     <div align="center"><input type="submit" name="submit" value="Register" />

     <input type="hidden" name="submitted" value="TRUE" />
</form>
</div>
</body>
</html>