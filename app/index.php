<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Love+Ya+Like+A+Sister|Acme|Chicle" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

    </head>
    <body>
    <?php
        include('functions.php');     

    ?>

    <!--<div class="container" id="top>
           
    </div>-->
    <div class="container" id="main">
        <div class="row" id="top">
            <div class="col-sm-4">
                <img class="rounded-circle" src="img/cheechchong.jpg" id="pedro">
            </div>
            <div class="col-sm-8">
                <h1>Cheech & Chong's Magical Ice Cream Parlor</h1>
            </div>
        </div> 
        <div class="container color border" id="regular">
                <div class="row">
                    <div class="col">
                        <h2>Regular, Boring Ice Cream - For The Less Adventurous</h2>
                        <table class="table no-border" id="table">
                            <thead>
                            <tr>
                                <th>Ice Cream</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>  
                            </thead>
                        
                            <tbody>
                            <?php 
                            foreach (getRegIceCream(getDb()) as $item) {
                            ?>
                            <tr id="row">
                                <td><?=$item['name']?></td>
                                <td><?=$item['description'];?></td>
                                <td>$<?=$item['price'];?></td>
                            </tr>
                            <?php  
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
        </div>
        <div class="container color border" id="seasonal">
                <div class="row">
                    <div class="col">
                        <h2>Super Duper Seasonal & Special Ice Cream - The Good Stuff</h2>
                        <table class="table no-border" id="table">
                            <thead>
                            <tr>
                                <th>Ice Cream</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>  
                            </thead>
                        
                            <tbody>
                            <?php 
                            foreach (SeasIceCream(getDb()) as $item) {
                            ?>
                            <tr id="row">
                                <td><?=$item['name']?></td>
                                <td><?=$item['description'];?></td>
                                <td>$<?=$item['price'];?></td>
                            </tr>
                            <?php  
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <div class="container color border" id="toppings">
                <div class="row">
                    <div class="col">
                        <h2>Toppings From Heaven - A Little Magic Never Hurt Anyone</h2>
                        <table class="table no-border" id="table">
                            <thead>
                            <tr>
                                <th>Ice Cream</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>  
                            </thead>
                        
                            <tbody>
                            <?php 
                            foreach (getToppings(getDb()) as $item) {
                            ?>
                            <tr id="row">
                                <td><?=$item['name']?></td>
                                <td><?=$item['description'];?></td>
                                <td>$<?=$item['price'];?></td>
                            </tr>
                            <?php  
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
        </div>
        <div class="container color border" id="options">
                <div class="row">
                    <div class="col">
                        <h2>Need Something More? Check Out Our Options</h2>
                        <table class="table no-border" id="table">
                            <thead>
                            <tr>
                                <th>Ice Cream</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>  
                            </thead>
                        
                            <tbody>
                            <?php 
                            foreach (getOptions(getDb()) as $item) {
                            ?>
                            <tr id="row">
                                <td><?=$item['name']?></td>
                                <td><?=$item['description'];?></td>
                                <td>$<?=$item['price'];?></td>
                            </tr>
                            <?php  
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        
    </div>
    
    </body>
</html>