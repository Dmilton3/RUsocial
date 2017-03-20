  <?php

  $dbhost = 'localhost';
  $dbuser = 'Team01';
  $dbpass = 'RadPack123!';
  $dbname = 'Team01';

  require_once( 'DB.php' );

 if($db = DB::connect( "mysql://$dbuser:$dbpass@$dbhost/$dbname" ))
{ 

         $db->setFetchMode(DB_FETCHMODE_ASSOC);

}
    ?>