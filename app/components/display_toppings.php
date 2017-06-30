<?php 
  foreach (getToppings(getDb()) as $topping) {
  ?>

<h6><?=$topping['addon_name'];?></h6>

<?php
} 
?>
