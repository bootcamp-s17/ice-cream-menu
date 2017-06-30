<?php 
  foreach (getAddOns(getDb()) as $extra) {

?>

<form method="get" class="form-inline pb-3 editButton">
  <input name="extraId" value="<?=$extra['id'];?>" type="hidden">
  <label class="sr-only" for="clientName">Flavor</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="addOnName" name="addOnName" value="<?=$extra['addon_name'];?>" >
  <select class="form-control mb-2 mb-sm-0 mr-2" id="addOnType" name="addOnType">
    <option value='<?=$extra['addon_type'];?>'><?=$extra['addon_type'];?></option>
    <option value="Topping">Topping</option>
    <option value="Container">Container</option>
  </select>
  <button type="submit" class="btn btn-success mr-2" name="submit" value="updateAddOn"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
  <button type="submit" class="btn btn-danger mr-2" name="submit" value="removeAddOn"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
</form>
    

  <?php
}
?>