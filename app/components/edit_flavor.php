<?php 
  foreach (getFlavors(getDb()) as $flavor) {

?>

<form method="get" class="form-inline pb-3 editButton">
  <input name="flavorId" value="<?=$flavor['id'];?>" type="hidden">
  <label class="sr-only" for="clientName">Flavor</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="flavorName" name="flavorName" value="<?=$flavor['flavor_name'];?>" >
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="flavorDescription" name="flavorDescription" value="<?=$flavor['flavor_description'];?>" >
    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0 pr-2 col-sm-1" id="price" name="price" value="<?=$flavor['price'];?>" placeholder="Price...">
    <select class="form-control mb-2 mb-sm-0 mr-2" id="flavorType" name="flavorType">
    <option value='<?=$flavor['status'];?>'><?=$flavor['status'];?></option>
    <option value="regular">Regular</option>
    <option value="seasonal">Seasonal</option>
  </select>
  <button type="submit" class="btn btn-success mr-2" name="submit" value="updateFlavor"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
  <button type="submit" class="btn btn-danger mr-2" name="submit" value="removeFlavor"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
  </form>
    

  <?php
}
?>