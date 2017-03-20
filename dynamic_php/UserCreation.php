<?php include "connection.php"; 
 session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Username Registration</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php

if(!empty($_POST['username']))
{
    $username = mysql_real_escape_string($_POST['username']);

     $checkusername = mysql_query("SELECT * FROM Users WHERE username = '".$username."'");
      
     if(mysql_num_rows($checkusername) == 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
         $email = $_SESSION['Email']; 

        $queryTest = "UPDATE Users SET  username = '$username' WHERE Email = '".$email."'"; 
         mysql_query($queryTest);

        $registerquery = mysql_query("SELECT username FROM Users WHERE Email = '".$email."'");

        if(!$registerquery['username'] == 'null')
        {
        $_SESSION['username'] = $username;
        
        header("Location: RUsocial.php"); 

        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
     }
}
else
{
    ?>
     
   <h1>Username Registration</h1>
     
   <p>Please create a Username</p>
     
    <form method="post" action="UserCreation.php" name="userform" id="usererform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    <?php
}
?>
 
</div>
</body>
</html>