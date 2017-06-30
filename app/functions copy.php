
<?php

function getDb() {
	$db = pg_connect("host=localhost port=5432 dbname=icecream_dev user=eyescream password=icecream");
	return $db;
}

function getItemTypes($db) {
	$request = pg_query(getDb(), "SELECT * FROM item_types order by name;");
	return pg_fetch_all($request);
}

function getFlavors($db) {
	$request = pg_query(getDb(), "SELECT name FROM menu_items;");
	return pg_fetch_all($request);
}

function getDescriptions($db) {
	$request = pg_query(getDb(), "SELECT description FROM menu_items;");
	return pg_fetch_all($request);
}

//var_dump($db);
//var_dump($request);
?>