<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		include 'app/style-links.html';
		include 'app/common.php';
		include 'app/functions.php';
		?>
		<title>Stews Sweet Street Treats</title>
	</head>
	<body>
		<div class="container-fluid" id="maincontent">
			<div class="row">
				<div class="centering">
					<h1 class="col text-center display-1 pb-0 shadow text2" id="title">Stew's Sweet Street Treats</h1>
				</div>
				</div> <!-- row -->
				<div class="row">
					<a class="pt-5 d-block mx-auto text-center" href="#menu" id="arrowDown"><i class="fa fa-arrow-circle-o-down fa-3x" style="opacity: .4" aria-hidden="true"></i></a>
				</div>
				</div> <!-- container -->
				<div class="container-fluid text-center">
					<span id="menu"></span>
					<h1 class="display-4 mt-3">How do you want it?</h1>
					<hr>
					<div class="row">
						<?php foreach(getServingOptions(getDb()) as $item) {  ?>
						<div class="col-3 mt-5">
							<div class="col">
								<figure class="figure mb-0">
									<img src="/images/icecream-icons/<?php if ($item['id'] <= 10) {echo '0'.$item['id'];} else {echo $item['id'];};?>.png" class="figure-img img-fluid rounded" style="width: 50px;" alt="">
									<figcaption class="figure-caption"><h4><?=$item['name']?></h4></figcaption>
								</figure>
							</div>
							<div class="col font-italic"><?=$item['description']?></div>
							<div class="col font-weight-bold">$<?=$item['price']?></div>
						</div>
						<?php } ?>
						</div> <!-- end row -->
						<h1 class="display-4 mt-3">Seasonal Flavors</h1>
						<hr>
						<div class="row">
							<?php foreach(getSeasonalFlavors(getDb()) as $item) {  ?>
							<div class="col-3 mt-5">
								<div class="col">
									<figure class="figure mb-0">
										<img src="/images/icecream-icons/<?php if ($item['id'] <= 10) {echo '0'.$item['id'];} else {echo $item['id'];};?>.png" class="figure-img img-fluid rounded" style="width: 50px;" alt="">
										<figcaption class="figure-caption"><h4><?=$item['name']?></h4></figcaption>
									</figure>
								</div>
								<div class="col font-italic"><?=$item['description']?></div>
							</div>
							<?php } ?>
							</div> <!-- end row -->
							<h1 class="display-4 mt-3">Regular Flavors</h1>
							<hr>
							<div class="row">
								<?php foreach(getRegularFlavors(getDb()) as $item) {  ?>
								<div class="col-3 mt-5">
									<div class="col">
										<figure class="figure mb-0">
											<img src="/images/icecream-icons/<?php if ($item['id'] <= 10) {echo '0'.$item['id'];} else {echo $item['id'];};?>.png" class="figure-img img-fluid rounded" style="width: 50px;" alt="">
											<figcaption class="figure-caption"><h4><?=$item['name']?></h4></figcaption>
										</figure>
									</div>
									<div class="col font-italic"><?=$item['description']?></div>
								</div>
								<?php } ?>
								</div> <!-- end row -->
								<h1 class="display-4 mt-3">Top it!</h1>
								<hr>
								<div class="row">
									<?php foreach(getToppings(getDb()) as $item) {  ?>
									<div class="col-3 mt-5">
										<div class="col">
											<figure class="figure mb-0">
												<img src="/images/icecream-icons/<?php if ($item['id'] <= 10) {echo '0'.$item['id'];} else {echo $item['id'];};?>.png" class="figure-img img-fluid rounded" style="width: 50px;" alt="">
												<figcaption class="figure-caption"><h4><?=$item['name']?></h4></figcaption>
											</figure>
										</div>
										<div class="col font-italic"><?=$item['description']?></div>
									</div>
									<?php } ?>
									</div> <!-- end row -->
									
									</div> <!-- end container -->
									<?php include 'app/script-links.html' ?>
								</body>
							</html>