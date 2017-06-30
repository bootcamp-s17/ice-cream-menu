
<?php
   include "./includes/db.php";
   include "./includes/common.php";

 ?>

<h1>add flavor</h1>
<form action="./addItems.php" action="GET">
   <input type="text" name="name">
   <input type="number" name="price">
   <button type="submit" name="submit" value="add_flavor">add</button>
</form>

<h1>add seasonal_flavor</h1>
<form  action="./addItems.php" action="GET">
   <input type="text" name="name">
   <input type="number" name="price">
   <button type="submit" name="submit" value="add_seasonal_flavor">add</button>
</form>

<h1>add topping</h1>
<form  action="./addItems.php" action="GET">
   <input type="text" name="name">
   <input type="number" name="price">
   <button type="submit" name="submit" value="add_topping">add</button>
</form>

<h1>add serving_type</h1>
<form action="./addItems.php" action="GET" >
   <input type="text" name="name">
   <input type="number" name="price">
   <button type="submit" name="submit" value="add_type">add</button>
</form>