 <?php
 function getDb() {
    $db = pg_connect("host=localhost port=5432 dbname=icereamdb_dev user=icecream password=password");
    return $db;
  }



  ?>