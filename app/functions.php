<?php
	function getDb() {
  $db = pg_connect("host=localhost port=5432 dbname=icecreamshop user=tracker password=track");
  return $db;
	}



function addFlavor($db, $flavor, $description, $type, $price) {
  
  $stmt = 'INSERT INTO menu_items (status, flavor_name, flavor_description, price) VALUES
      (\''.$type.'\',\''.$flavor.'\',\''.$description.'\',\''.$price.'\');';

  $result = pg_query($stmt);
}

function getFlavors($db) {
  $request = pg_query(getDb(), "SELECT * FROM menu_items ORDER BY flavor_name");
  return pg_fetch_all($request);
}

function getSeasonalFlavors($db) {
  $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE status='seasonal' ORDER BY flavor_name");
  return pg_fetch_all($request);
}
function getRegularFlavors($db) {
  $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE status='regular' ORDER BY flavor_name");
  return pg_fetch_all($request);
}

if (isset($_GET['submit'])) {
	
	$safeSubmit = htmlentities($_GET['submit']);
	if (isset($_GET['flavorName']) && isset($_GET['flavorDescription']) && isset($_GET['price']) && isset($_GET['flavorType'])) {
  $safeFlavor = htmlentities($_GET['flavorName']);
  $safeDesc = htmlentities($_GET['flavorDescription']);
  $safeType = htmlentities($_GET['flavorType']);
  $safePrice = htmlentities($_GET['price']);
  $safeId = htmlentities($_GET['flavorId']);
	}
	switch($safeSubmit){
		case 'removeFlavor':
			removeFlavor(getDb(), $safeId);
			break;

		case 'updateFlavor':
			updateFlavor(getDb(), $safeFlavor, $safeDesc, $safeType,$safePrice, $safeId);
			break;

		case 'addFlavor':
			addFlavor(getDb(), $safeFlavor, $safeDesc, $safeType,$safePrice);
			break;


	}
	

}

function removeFlavor($db, $id) {
  $stmt   = "DELETE FROM menu_items WHERE id=".$id;
  var_dump($stmt);
  $result = pg_query($stmt);

}

function updateFlavor($db, $flavor, $description, $type, $price, $id) {
	$stmt = 'UPDATE menu_items SET flavor_name = \''.$flavor.'\', flavor_description = \''.$description.'\', status = \''.$type.'\', price = \''.$price.'\' WHERE id=' .$id;
	$result = pg_query($stmt);
}



?>