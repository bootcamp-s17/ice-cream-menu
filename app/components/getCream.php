<?php
function getCreams($db) {
    $request = pg_query(getDb(), "SELECT item_types.id AS item_type_id, item_types.name, menu_items.id AS menu_items_id, menu_items.item_type_id, menu_items.cream_name, menu_items.description, menu_items.price
    FROM item_types 
    JOIN menu_items ON item_types.id = menu_items.item_type_id
    -- LEFT JOIN colors ON color_palette.color_id = colors.id
    WHERE item_type_id = 6
    ORDER BY cream_name;
    ");
    return pg_fetch_all($request);
  }
function getSeason($db) {
    $request = pg_query(getDb(), "SELECT item_types.id AS item_type_id, item_types.name, menu_items.id AS menu_items_id, menu_items.item_type_id, menu_items.cream_name, menu_items.description, menu_items.price
    FROM item_types 
    JOIN menu_items ON item_types.id = menu_items.item_type_id
    -- LEFT JOIN colors ON color_palette.color_id = colors.id
    WHERE item_type_id = 7
    ORDER BY cream_name;
    ");
    return pg_fetch_all($request);
  }
function getToppings($db) {
    $request = pg_query(getDb(), "SELECT item_types.id AS item_type_id, item_types.name, menu_items.id AS menu_items_id, menu_items.item_type_id, menu_items.cream_name, menu_items.description, menu_items.price
    FROM item_types 
    JOIN menu_items ON item_types.id = menu_items.item_type_id
    -- LEFT JOIN colors ON color_palette.color_id = colors.id
    WHERE item_type_id = 8
    ORDER BY cream_name;
    ");
    return pg_fetch_all($request);
  }
 function getServed($db) {
    $request = pg_query(getDb(), "SELECT item_types.id AS item_type_id, item_types.name, menu_items.id AS menu_items_id, menu_items.item_type_id, menu_items.cream_name, menu_items.description, menu_items.price
    FROM item_types 
    JOIN menu_items ON item_types.id = menu_items.item_type_id
    -- LEFT JOIN colors ON color_palette.color_id = colors.id
    WHERE item_type_id = 9
    ORDER BY cream_name;
    ");
    return pg_fetch_all($request);
  }
?>
