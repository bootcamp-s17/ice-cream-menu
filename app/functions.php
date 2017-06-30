<?php
function getDb() {

    $db = pg_connect("host=localhost port=5432 dbname=icecreamdev_dev user=icecream password=nomnomnom");
    return $db;
  }
?>