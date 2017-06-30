<?php

function iceCream($id) {
    $stmt = "SELECT * FROM item_type_id WHERE name='Regular Ice Cream Flavors')"
    $request = pg_query(getDb(), $stmt);
    $results = pg_fetch_all($request);
    if ($results) {
      return $results;
    }
    return array();
  };


?>                            