<?php 
		date_default_timezone_set('America/Kentucky/Louisville');


		if (isset($_GET['submit'])){
	        $cleanGet = $_GET;
		        foreach ($cleanGet as $key => $value) {
		          $key = htmlentities($value);
		        }
		        switch ($cleanGet['submit']) {

		        } // switch end

		    } // if submit end


		function getRegularFlavors($db){
			$request = pg_query($db, 'SELECT * FROM menu_items WHERE item_type_id=1;');
			return pg_fetch_all($request);
		};


		function getSeasonalFlavors($db){
			$request = pg_query($db, 'SELECT * FROM menu_items WHERE item_type_id=2;');
			return pg_fetch_all($request);
		};

		function getToppings($db){
			$request = pg_query($db, 'SELECT * FROM menu_items WHERE item_type_id=4;');
			return pg_fetch_all($request);
		};

		function getServingOptions($db){
			$request = pg_query($db, 'SELECT * FROM menu_items WHERE item_type_id=3;');
			return pg_fetch_all($request);
		};


 ?>