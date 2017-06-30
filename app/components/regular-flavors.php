<h3>Regular</h3>

<div id="accordion" role="tablist" aria-multiselectable="true">

<?php 
	//Repeat the following HTML for every item in menu
	foreach (getMenu(getDb()) as $menuItem) {

		//Only if the menu item is of regular flavor type
		if ($menuItem['item_type_id'] == 1) {
	
?>

  <div class="card icecream-card">
    <div class="card-header" role="tab" id="<?=$menuItem['menu_item_name']?>">
      
      <h5 class="mb-0">
      	<div class="row">
      		<div class="col">
		      	<!-- Name of Ice Cream / Opens Description and Options when clicked -->
		        <a data-toggle="collapse" data-parent="#accordion" href="<?='#' . 'collapse' . $menuItem['id']?>" aria-expanded="true" aria-controls="<?='collapse' . $menuItem['id']?>" id="icecream-name">
		          <?=$menuItem['menu_item_name']?>
		        </a>
	        </div>
	        <div class="col">
	        	<!-- Hidden input holding icecream price -->
	        	<div class="input-group"  hidden>
				  <span class="input-group-addon">$</span>
				  <input type="text"  value="<?=$menuItem['menu_item_price']?>" class="form-control icecream-price" aria-label="Dollar Amount"  readonly>
				</div>
		        <!-- Input that displays current total -->
		        <div class="input-group">
				  <span class="input-group-addon">$</span>
				  <input type="text" class="form-control icecream-total" aria-label="Dollar Amount"  readonly>
				</div>
			</div>
			<div class="col">
		        <!-- Button that adds to order -->
		        <button class="btn btn-success btn-large pull-right" onclick="addToBasket(event)">+</button>
	        </div>
      	</div>
      </h5>
      
    </div>

    <div id="<?='collapse' . $menuItem['id']?>" class="collapse hide" role="tabpanel" aria-labelledby="<?=$menuItem['menu_item_name']?>">
      <div class="card-block">
      <div class="card card-inverse card-danger mb-3 text-center">
      <div class="card-block">
        <?=$menuItem['menu_item_desc']?> <br>
       </div>
       </div>
		<div class="btn-group" data-toggle="buttons"> 
		<div class="row">
		<div class="col">
		<h6>Toppings</h6>      
        <?php
			//Repeat the following HTML for every item in menu
			foreach (getMenu(getDb()) as $menuItem) {
				//Create array of toppings
				if ($menuItem['item_type_id'] == 4) {
		?>
		<div class="col">
		  <label class="btn btn-primary">
		    <input type="checkbox" class="topping-checkbox" autocomplete="off" onchange="addRemoveTopping(event)">
		     <span class="topping-name"><?=$menuItem['menu_item_name']?></span>
		  </label>
		  <!-- Hidden input holding toppings price -->
	    	<div class="input-group"  hidden>
			  <span class="input-group-addon">$</span>
			  <input type="text" value="<?=$menuItem['menu_item_price']?>" class="form-control topping-price" aria-label="Dollar Amount"  readonly>
			</div>
		</div>
		<?php 
				}
			}
		?>
		</div>
		<div class="col">
		<h6>Cup (Sith) or Cone (Jedi) or Both?</h6>      
        <?php
			//Repeat the following HTML for every item in menu
			foreach (getMenu(getDb()) as $menuItem) {
				//Create array of toppings
				if ($menuItem['item_type_id'] == 3) {
		?>
		<div class="col">
		  <label class="btn btn-primary">
		    <input type="checkbox" class="serving-checkbox" autocomplete="off" onchange="addRemoveServing(event)">
		     <span class="serving-name"><?=$menuItem['menu_item_name']?></span>
		  </label>
		  <!-- Hidden input holding toppings price -->
	    	<div class="input-group"  hidden>
			  <span class="input-group-addon">$</span>
			  <input type="text" value="<?=$menuItem['menu_item_price']?>" class="form-control serving-price" aria-label="Dollar Amount"  readonly>
			</div>
		</div>
		<?php 
				}
			}
		?>
		</div>
		</div>
		</div>
      </div>
    </div>
  </div>

<?php
		}
	}


?>

</div>
