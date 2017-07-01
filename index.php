<?php
include "app/includes/db.php";
include "app/includes/common.php";
include $_SERVER['DOCUMENT_ROOT'] . '/app/includes/header.php';
?>
<body>
   <div class="container-fluid text-center">
      <form class="form-inline" action="GET">
      <div class="col-12 mt-5">
      
      <div class="row ">

         <div class="col-md-10 mx-auto">
            <h1 class="display-3">Scoops - <img class="img img-fluid" src="./dist/img/scoop.svg" alt=""></h1>
            <hr>
            <!-- <form class="form-inline" action="GET"> -->
               <?php foreach (getTable(db(),"size") as $size) { ?>
                  <div class="col-5 d-inline-block my-3">
                     <input class="radio-btn" name="size_name" type="radio" id="<?= $size['id'] . $size["name"]?>" data-price="<?= $size['price']?>" value="<?= $size['name']?>" />
                     <label for="<?= $size['id'] . $size["name"] ?>">
                     <?= $size['name'] ?>
                     <p class="my-0 ml-sm-2 ml-md-5 d-inline-block align-middle">$<?= $size['price']?></p>
                     </label> 
                     
                  </div>
               <?php } ?>
            <!-- </form>    -->
         </div>
      </div>
      <div class="row mb-5">
         <div class="col">
            <h1  class="display-1 d-block mb-5">Pick One:</h1>
            <h1 id="flavor-btn" class="pick-kind display-2 d-inline-block col-4">Flavors</h1>
            <img class="img img-fluid align-bottom mx-3" src="./dist/img/ice-cream.svg" alt="">
            <h1 id="originals-btn" class="pick-kind display-2 d-inline-block col-4">Originals</h1>
         </div>
      </div>
      

      <div class="row">
      
         <div id="flavors" class="col-lg-6 mx-auto">
            <h1  class="display-3">Flavors</h1>
            <hr>
            <!-- <form class="form-inline" action="GET"> -->
               <?php foreach (getTable(db(),"flavors") as $flavor) { ?>
                  <div class="col-5 d-inline-block my-3">
                     <input class="radio-btn" name="flavor_name" type="radio" id="<?= $flavor['id'] . $flavor["name"]?>"" data-price="<?= $flavor['price']?>" value="<?= $flavor['name']?>" />
                     <label for="<?= $flavor['id'] . $flavor["name"] ?>" ><?= $flavor['name'] ?><p class="my-0 ml-sm-2 ml-md-5 d-inline-block align-middle">$<?= $flavor['price']?></p></label> 
                     
                  </div>
               <?php } ?>
            <!-- </form>    -->
         </div>
<!--       </div>
      <div class="row"> -->
         <div id="originals" class="col-lg-6 mx-auto">
            <h1  class="display-3">Originals</h1>
            <hr>
            <!-- <form class="form-inline" action="GET"> -->
               <?php foreach (getTable(db(),"seasonal_flavors") as $flavor) { ?>
                  <div class="col-5 d-inline-block my-3">
                     <input class="radio-btn" name="original_name" type="radio" id="<?= $flavor['id'] . $flavor["name"]?>" data-price="<?= $flavor['price']?>" value="<?= $flavor['name']?>"/>
                     <label for="<?= $flavor['id'] . $flavor["name"] ?>" ><?= $flavor['name'] ?><p class="my-0 ml-sm-2 ml-md-5 d-inline-block align-middle">$<?= $size['price']?></p></label> 
                     
                  </div>
               <?php } ?>
          <!-- </form>    -->
         </div>
      </div>
      <div class="row">
         <div class="col-md-10 mx-auto">
            <h1 class="display-3">Toppings  - <img class="img img-fluid" src="./dist/img/cherries.svg" alt=""></h1>
            <hr>
            <!-- <form class="form-inline" action="GET"> -->
               <?php foreach (getTable(db(),"toppings") as $topping) { ?>
                  <div class="col-5 d-inline-block my-3">
                     <input class="radio-btn" name="topping" type="checkbox" id="<?= $topping['id'] . $topping["name"]?>" data-price="<?= $topping['price']?>" value="<?= $topping['name']?>"/>
                     <label for="<?= $topping['id'] . $topping["name"] ?>"><?= $topping['name'] ?><p class="my-0 ml-sm-2 ml-md-5 d-inline-block align-middle">$<?= $topping['price']?></p></label> 
                     
                  </div>
               <?php } ?>
            <!-- </form>    -->
         </div>
      </div>
      <div class="row">
         <div class="col-md-10 mx-auto">
            <h1 class="display-3">Cones - <img class="img img-fluid" src="./dist/img/big-ice-cream-bowl.svg" alt=""></h1>
            <hr>
            <!-- <form class="form-inline" action="GET"> -->
               <?php foreach (getTable(db(),"serving_type") as $type) { ?>
                  <div class="col-5 d-inline-block my-3">
                     <input class="radio-btn" name="type_name" type="radio" id="<?= $type['id'] . $type["name"]?>"  data-price="<?= $size['price']?>" value="<?= $type['name']?>"/>
                     <label for="<?= $type['id'] . $type["name"] ?>"><?= $type['name'] ?> <p class="my-0 ml-sm-2 ml-md-5 d-inline-block align-middle">$<?= $size['price']?></p></label> 
                  </div>
               <?php } ?>
            <!-- </form>    -->
         </div>
      </div>
      <div class="row">
         <div class="col-4 mx-auto">
            <!-- <form action="GET"> -->
               <input id="inputTotal" name="total" type="hidden" data-price="">
            <!-- </form> -->
            <h1 class="display-2 d-inline-block text-left">Total: </h1>
            
            <h1 class="display-3 d-inline-block ml-5">$<span id="total"></span></h1>
         </div>
      </div>
      <button id="submitForms" class="col-6 mx-auto m-5 btn btn-lg btn-success btn-block"><h5>Give me!</h5></button>
   </div>
   </div>
   </form>
</body>
<?php 
   include $_SERVER['DOCUMENT_ROOT'] . '/app/includes/footer.php';
 ?>
