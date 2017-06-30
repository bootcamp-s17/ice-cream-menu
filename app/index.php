<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ice Cream Thing</title>

                          <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Mouse+Memoirs" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">


                           <!-- bootstrap --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




                    <!-- my styling -->
<link rel="stylesheet" href="main.css">

</head>
<body>


<!-- php components -->

<?php 
  include('functions.php');
?>

                   

     <!-- Top Header and Main Logo -->
	<header class="container-fluid">

			<h1>Seuss Scoops</h1>
		
	</header>



	<!--  main hero image -->
	<div id="mainhero" class="container-fluid">



		<div class="w3-content w3-section">
			<h1 class="mySlides">"Forget art. Put your trust in ice cream."</h1>
			<h1 class="mySlides">"The serving size of ice cream is when you hear the spoon hit the bottom of the container."</h1>
			<h1 class="mySlides">"A day without ice cream was a day wasted."</h1>

			  
		</div>

		</div>








<!-- Flavors Section --> 

	<div class="container-fluid">
		
		<div class="row">
			 <div id="flavorleft" class="col-sm-6">.
						<h1 id="flavorheading"><a name="anchor2" id="regFlavorAnchor">Regular Flavors</a></h1>

				  </div> <!-- end of first column -->
				  
				  <div  id="flavorright" class="col-sm-6">

				  <!-- <h1 id="flavorheading2"> Seasonal Flavors</h1> -->

				  <h1 id="flavorheading2"><a name="anchor1" id="seasonalFlavorAnchor">Seasonal Flavors</a></h1>
				  	


				  </div> <!-- end of second column -->
		</div> <!-- end of row -->
	</div> <!-- end of contianer -->



	<!-- stripes -->
    </div>
 		<div class=" container-fluid stripe">
    </div>





<!-- display regular flavors on click  -->
	<div id="regularFlavors" class="container-fluid">
			<h1>Regular Flavors</h1>

					<?php 
					foreach (getRegularFlavors(getDb()) as $flavor) {
					  ?>

							      <h2> <?=$flavor['name'];?> </h2>
							      <p> <?= '$', $flavor['price'], '|', ' ', $flavor['description'];?> </p>

					 <?php } ?> <!-- end  get regular flavors php -->


	</div> <!-- end fo regular flavors div -->




	<!-- display Seasonal flavors on click  -->
	<div id="seasonalFlavors" class="container-fluid">
	<h1>Seasonal Flavors</h1>

						<?php 
								 foreach (getSeasonalFlavors(getDb()) as $flavor) {
						  ?>

								      <h2> <?=$flavor['name'];?> </h2>
								      <p> <?= '$', $flavor['price'], '|', ' ', $flavor['description'];?> </p>

						 <?php } ?> <!-- end  get seasonal flavors php -->


	</div> <!-- end fo seasonal flavors div -->





	<!-- Toppings hero image -->
	<div id="secondhero" class="container-fluid">

		<h1 id="toppingheading2"><a name="anchor3" id="toppingAnchor">Toppings and Cones</a></h1>

	</div>






	<!-- Toppings Section --> 

	<div class="container-fluid">
		
<div class="row">
	  <div id="toppingRight" class="col-sm-6">

	  <h1>Toppings</h1>

	  <?php 
			 foreach (getToppings(getDb()) as $topping) {
        ?>

			      <h2> <?=$topping['name'];?> </h2>
			      <p> <?= '$', $topping['price'], '|', ' ', $topping['description'];?> </p>

	  <?php } ?> <!-- end  get toppings php -->



	  </div> <!-- end toppings  -->
	  
	  <div id="toppingLeft"  class="col-sm-6">

	  <h1>Cones</h1>
	  <?php 
			 foreach (getOptions(getDb()) as $option) {
        ?>

			      <h2> <?=$option['name'];?> </h2>
			      <p> <?= '$', $option['price'], '|', ' ', $option['description'];?> </p>

	  <?php } ?> <!-- end  get toppings php -->
	  	


	  </div>
</div>


     </div>












<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="main.js"  ></script>

</body>
</html>