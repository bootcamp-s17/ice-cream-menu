<?php 
  foreach (getRegularFlavors(getDb()) as $flavor) {
  $large= $flavor['price'] * 1.15;
?>

<h4><?=$flavor['flavor_name'];?></h4>
<p><em><?=$flavor['flavor_description'];?></em></p>
<p><?=$flavor['price'];?> | <?=$large;?></p>
<hr>

<?php
} 
?>
