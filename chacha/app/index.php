<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ice Cream Menu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
  <link rel="icon" type="image/png" href="cone.png">
  <script src="main.js"></script>
</head>
<body onload="pullData()">
	<?php
		include ('common.php');
		include ('items.php');
		include ('menu.php');
	 ?>
<h1> Get Frosted!</h1>
<div class="total" id="total">
	<label>Total</label>
	<input type="text" name="Total Cost" value="total" placeholder="$$$">
</div>	

<h2> Regular </h2>
<div class="row">
<?php 
// Get all the Regular Flavors
	foreach (getMenu(getDb()) as $menu){
		if ($menu['item_type_id'] != 1){

		}
		else{
?>
	<div class="row mx-auto">
		<form method="get" action="">
			<div class="col">
				<button class="btn" ng-click="total(service.price,service.state); toggle(service);" value="price[i]"><?=$menu['name'];?></button>
			</div>
			<div class="col">
				<p><?=$menu['description'];?></p>
			</div>
			<div class="col">
				<p> Price $<?=$menu['price'];?></p>
			</div>			
		</form>
	</div>
<?php
	}
}
?>
</div>
<h2> Seasonal </h2>
<div class="row">
<?php 
// Get all the Seasonal Flavors
	foreach (getMenu(getDb()) as $menu){
		if ($menu['item_type_id'] != 2){

		}
		else{
?>
	<div class="row mx-auto">
		<form method="get" action="">
			<div class="col">
				<div class="align-middle">
					<button class="btn"><?=$menu['name'];?></button>
				</div>	
			</div>
			<div class="col">
				<div class="align-middle">
					<p><?=$menu['description'];?></p>
				</div>
			</div>
			<div class="col">
				<div class="align-middle">
					<p> Price $<?=$menu['price'];?></p>
				</div>
			</div>	
		</form>
	</div>
<?php
	}
}
?>
</div>
<h2> Toppings </h2>
<div class="row">
<?php 
// Get all the Toppings
	foreach (getMenu(getDb()) as $menu){
		if ($menu['item_type_id'] != 3){

		}
		else{
?>
	<div class="row mx-auto">
		<form method="get" action="">
			<div class="col">
				<div class="align-middle">
					<button class="btn"><?=$menu['name'];?></button>
				</div>
			</div>	
			<div class="col">
				<div class="align-middle">
					<p><?=$menu['description'];?></p>
				</div>
			</div>		
			<div class="col">
				<div class="align-middle">
					<p> Price $<?=$menu['price'];?></p>
				</div>
			</div>	
		</form>
	</div>
<?php
	}
}
?>
</div>
<h2> Serving Options </h2>
<div class="row">
<?php 
// Get all the serving Options
	foreach (getMenu(getDb()) as $menu){
		if ($menu['item_type_id'] != 4){

		}
		else{
?>
	<div class="row mx-auto">
		<form method="get" action="">
			<div class="col">
				<div class="align-middle">
					<button class="btn"><?=$menu['name'];?></button>
				</div>
			</div>
			<div class="col">
				<div class="align-middle">
					<p><?=$menu['description'];?></p>
				</div>
			</div>			
			<div class="col">
				<div class="align-middle">
					<p> Price $<?=$menu['price'];?></p>
				</div>
			</div>	
		</form>
	</div>
<?php
	}
}
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</body>
</html>