<?php

	function getItem($id) {
	    $stmt = "SELECT * FROM menu_items WHERE item_type_id=$id ORDER BY name ASC";
	    $request = pg_query(getDb(), $stmt);
	    $results = pg_fetch_all($request);
	    if ($results) {
	      return $results;
	    }
	    return array();
    }; 

	function getDb() {
	    $db = pg_connect("host=localhost port=5432 dbname=icecreamdev_dev user=icecream password=nomnomnom");
	    return $db;}
	 ?>
  <h3>Regular Flavors</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
<?php
    foreach (getItem(1) as $item) {
?>
    <tr>
        <td><?=$item['name'];?></td>
        <td><?=$item['description'];?></td>
        <td><?=$item['price'];?></td>
    </tr>
<?php 
    }
?>
</table>
<br />
  <h3>Seasonal Flavors</h3>
	<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
<?php
    foreach (getItem(2) as $item) {
?>
    <tr>
        <td><?=$item['name'];?></td>
        <td><?=$item['description'];?></td>
        <td><?=$item['price'];?></td>
    </tr>
<?php 
    }
?>
</table>
<br />
  <h3>Eating Options</h3>
	<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
<?php
    foreach (getItem(3) as $item) {
?>
    <tr>
        <td><?=$item['name'];?></td>
        <td><?=$item['description'];?></td>
        <td><?=$item['price'];?></td>
    </tr>
<?php 
    }
?>
</table>
<br />
  <h3>Toppings</h3>
	<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
<?php
    foreach (getItem(4) as $item) {
?>
    <tr>
        <td><?=$item['name'];?></td>
        <td><?=$item['description'];?></td>
        <td><?=$item['price'];?></td>
    </tr>
<?php 
    }
?>
</table>