<?php
//List of Global variables for later use
//Keep a count of how many times we hit the db
$dbHitCount = 0;

//Function used to call our database
//TODO - Needs to be secured
function getDb() {
  global $dbHitCount;
  $db = pg_connect(
      "host=localhost
       port=5432 
       dbname=icecream_db 
       user=icecream_dev
       password=password");
    $dbHitCount++;
    return $db;
}

//Grab all menu items and information form db
function getMenu($db) {
  $stmt = 'SELECT * FROM menu_items;';

  $request = pg_query($db, $stmt);

  return pg_fetch_all($request);

}

?>