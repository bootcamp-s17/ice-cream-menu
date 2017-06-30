<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Who Screams?</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="challengeaccepted.jpg">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="menu">
<h1> Who Screams for Ice Cream? </h1>

<?php include "functions.php";?>
<!-- <div class="container">
<h4> All Ice Cream Types </h4>
<?php
foreach (getItemTypes(getDb()) as $itemType) {
	?>
				  <div>
				    <ul class="iceCreamTypes">
				      <li><?=$itemType['name'];?></li>
				    </ul>
			      </div>
	<?php
}
?>
</div>

<div class="container">
<h4> Ice Cream Flavors </h4>
<?php
foreach (getFlavors(getDB()) as $flavors) {
	?>
			    <div>
			      <ul class="iceCreamFlavor">
			        <li><?=$flavors['name'];?></li>
			      </ul>

			    </div>
	<?php
}
?>
</div>

<div class="container">
<h4> What are the kids saying? </h4>

<?php
foreach (getDescriptions(getDb()) as $descriptions) {
	?>
			    <div>
			      <ul class="descriptions">
			        <li><?=$descriptions['description'];?></li>
			      </ul>
			    </div>

	<?php
}
?>
</div> -->


</div>
</body>
</html>









