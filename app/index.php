<!DOCTYPE html>
<html>
<head>
	<title>EYES CREAM</title>
	<?php include 'header.php'; ?>
</head>
<body>
	<?php include 'functions.php'; ?>
	
	<div class='container col-md-9 row menu-body'>
		<h1 class='text-center'>Eyes Cream Ghoulish Dessert Emporium</h1>
		<div class='col col-md-8'>
			<div class=" card mb-3 ml-3">
  			<div class='card-header'>
  				<h3>Seasonal Flavors</h3>
  			</div>
				<div class='card-block'>
					<?php include 'components/display_seasonal.php'; ?>
				
				</div>
			</div>

			<div class="card mb-3 ml-3">
  			<div class='card-header'>
  				<h3>Regular Flavors</h3>
  			</div>
				<div class='card-block'>
					<?php include 'components/display_regular.php'; ?>
				
				</div>
			</div>
		</div>
		
		<div class="col col-md-4">
			
			<div class="card mb-3 ml-3">
  			<div class='card-header'>
  				<h5>Toppings</h5>
  			</div>
				<div class='card-block'>
					<?php include 'components/display_toppings.php'; ?>
				
				</div>
			</div>
						<div class="card mb-3 ml-3">
  			<div class='card-header'>
  				<h5>Serving Options</h5>
  			</div>
				<div class='card-block'>
					<?php include 'components/display_containers.php'; ?>
				
				</div>
			</div>
		</div>
	</div>
	<footer class='footer'>
		<div class='container'>
		<span class-'text-muted'><a href="/manage"><h6>Manage Menu</h6></a></span>
		</div>
	</footer>
</body>
</html>