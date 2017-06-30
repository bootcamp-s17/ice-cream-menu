<!DOCTYPE html>
<html>
<head>
	<title>EYES CREAM DESSERTS | Manage Menu</title>
	<?php include '../header.php'; ?>
</head>
<body>


<?php include '../functions.php'; ?>
	<div class='container col-md-9'>
		<a href="../"><h6>Home</h6></a>
		<div class="card mb-3 ">
			<div class='card-header'>
				<h4>Manage Flavors</h4>
			</div>
			<div class='card-block'>
				<?php include '../components/add_flavor.php'; ?>
				
				<?php include '../components/edit_flavor.php'; ?>

			</div>
		</div>

	</div>

</body>
</html>