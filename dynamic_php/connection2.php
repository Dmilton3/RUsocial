<html>

<head>
<title>My First PHP Page </title>
</head>

<body>

 

    <?php

  $dbhost = 'localhost';
  $dbuser = 'Team01';
  $dbpass = 'RadPack123!';
  $dbname = 'Team01';

  require_once( 'DB.php' );

 if($db = DB::connect( "mysql://$dbuser:$dbpass@$dbhost/$dbname" ))
{ 

         $db->setFetchMode(DB_FETCHMODE_ASSOC);

  $sql = 'SELECT * FROM Users'; 

  $demoResult = $db->query($sql); 

  while ($demoRow = $demoResult->fetchRow()) {
      echo $demoRow['user_id'] . ' ' . $demoRow['Email'] . '<br>';
     echo $demoRow['screenName'] . '<br>';
  }
}
    ?>

</body>

</html>