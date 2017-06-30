<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dream Cream</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

  function getDb() {
    $db = pg_connect("host=localhost port=5432 dbname=creamdb user=dreamycreamy password=bestcreams");
    return $db;
  }

?>

<div class="container bg-image" style="padding-top: 30px;">
<div class="row">
  <div class="col-xs lefty">
  </div>
  <div class="col-xs" align="center">
    <img src ="images/ice-cream.png" height="64px" width="64px">
    <h1>Dream Cream</h1>
  </div>
</div>
<div class="row">
  <div class="col-xs lefty">
    <table>
    </table>
  </div>
  <div class="col-xs">
  <span class="float-xs-right">
    <div class="panel panel-default">
    <table class="table table-hover table-curved">
      <thead>
        <tr>
          <th>Basic Flavors</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('components/getCream.php'); 
        foreach (getCreams(getDb()) as $cream) {
        print 
          "<tr>".
            "<th scope='row'>".$cream['cream_name']."</th>".
            "<td class='text-center'>".$cream['description']."</td>".
            "<td class='ralign'>"."$".$cream['price']."</td>"
          ."</tr>";
        }
        ?>
      </tbody>
    </table>
    </div>
    <table class="table table-hover table-curved">
      <thead>
        <tr>
          <th>Seasonal Flavors</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach (getSeason(getDb()) as $cream) {
        print 
          "<tr>".
            "<th scope='row'>".$cream['cream_name']."</th>".
            "<td class='text-center'>".$cream['description']."</td>".
            "<td class='ralign'>"."$".$cream['price']."</td>"
          ."</tr>";
        }
        ?>
      </tbody>
    </table>

    <table class="table table-hover table-curved">
      <thead>
        <tr>
          <th>Toppings</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach (getToppings(getDb()) as $cream) {
        print 
          "<tr>".
            "<th scope='row'>".$cream['cream_name']."</th>".
            "<td class='text-center'>".$cream['description']."</td>".
            "<td class='ralign'>"."$".$cream['price']."</td>"
          ."</tr>";
        }
        ?>
      </tbody>
    </table>

    <table class="table table-hover table-curved">
      <thead>
        <tr>
          <th>Serving Options</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach (getServed(getDb()) as $cream) {
        print 
          "<tr>".
            "<th scope='row'>".$cream['cream_name']."</th>".
            "<td class='text-center'>".$cream['description']."</td>".
            "<td class='ralign'>"."$".$cream['price']."</td>"
          ."</tr>";
        }
        ?>
      </tbody>
    </table>
  </span>
  </div>
</div>
</div>
</body>
</html>