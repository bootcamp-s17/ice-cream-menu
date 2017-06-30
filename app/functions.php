<?php
  function getDb() {
    $db = pg_connect("host=localhost port=5432 dbname=icecream_dev user=vanilla password=ice");
    return $db;
  }


function getRegularFlavors($db) {
    $stmt = "SELECT * FROM menu_items WHERE item_type_id=1";
    $request = pg_query(getDb(), $stmt);
    $results = pg_fetch_all($request);
    if ($results) {
      return $results;
    }
    return array();
  };

  function getSeasonalFlavors($db) {
    $stmt = "SELECT * FROM menu_items WHERE item_type_id=2";
    $request = pg_query(getDb(), $stmt);
    $results = pg_fetch_all($request);
    if ($results) {
      return $results;
    }
    return array();
  };

  function getToppings($db) {
    $stmt = "SELECT * FROM menu_items WHERE item_type_id=3";
    $request = pg_query(getDb(), $stmt);
    $results = pg_fetch_all($request);
    if ($results) {
      return $results;
    }
    return array();
  };

  function getOptions($db) {
    $stmt = "SELECT * FROM menu_items WHERE item_type_id=4";
    $request = pg_query(getDb(), $stmt);
    $results = pg_fetch_all($request);
    if ($results) {
      return $results;
    }
    return array();
  };




?>