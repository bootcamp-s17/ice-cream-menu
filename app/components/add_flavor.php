<form method="get" class="form-inline pb-3">

  <label class="sr-only" for="clientName">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="flavorName" name="flavorName" value="" placeholder="New flavor name...">
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="flavorDesctiption" name="flavorDescription" value="" placeholder="Describe this concoction...">
  <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0 pr-2 col-sm-1" id="price" name="price" value="" placeholder="Price...">
  <select class="form-control mb-2 mb-sm-0 mr-2" id="flavorType" name="flavorType">
    <option value="regular">Regular</option>
    <option value="seasonal">Seasonal</option>
  </select>
  <button type="submit" class="btn btn-primary mr-2" name="submit" value="addFlavor"><i class="fa fa-plus" aria-hidden="true"></i></button>
  </form>