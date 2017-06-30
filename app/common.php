<?php 

	
  $ENV = parse_ini_file('env.ini');


  function getDb() {
    global $ENV;
    $db = pg_connect("host=$ENV[HOST] port=$ENV[PORT] dbname=$ENV[DB] user=$ENV[UN] password=$ENV[PW]");
    return $db;
  }




 ?>