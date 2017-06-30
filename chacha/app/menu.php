<?php

function getMenu($db) {
    $request = pg_query(getDb(), "SELECT * FROM menu_items order by name;");
    return pg_fetch_all($request);
  }


function rebuildDataFile(){
	$data = array();
	$file = $_SERVER['DOCUMENT_ROOT'] . '/' . 'data.json';

	$stmt ='SELECT * FROM menu_items ORDER BY name';
	$request = pg_query(getDb(), $stmt);
	$menus = json_encode(pg_fetch_all($request));

	file_put_contents($file, $menus);
	echo 'DataFile';
}
rebuildDataFile();

?>