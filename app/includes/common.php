<?php 

   if(isset($_GET['submit'])){
      $data = $_GET;
      foreach ($data as $key => $value) {
          $key = htmlentities($value, ENT_QUOTES);
       } 

       $name = $data['name'];
       $price = $data['price'];
       
      switch ($data['submit']) {
          case 'add_flavor':
             addRow(db(), "flavors", array("name"), array($name));
             break;
          case 'add_seasonal_flavor':
             addRow(db(), "seasonal_flavors", array("name"), array($name));
             break;
          case 'add_topping':
             addRow(db(), "toppings", array("name"), array($name));
             break;
          case 'add_type':
             addRow(db(), "serving_type", array("name"), array($name));
             break;         
          
          default:
             # code...
             break;
       } // end switch
   } // end if

function addRow($db, $table, $cols, $rows){
   $rows = implode(",", $rows);
   $cols = implode(",", $cols);
   $row = "INSERT INTO $table ($cols) VALUES ('$rows');";
   pg_query($db, $row);
}

function getTable($db, $table){
   return pg_fetch_all(pg_query($db, "SELECT * FROM $table"));
}
