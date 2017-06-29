# Ice Cream Menu

Create a webpage that displays the menu for an ice cream shop.

## Objectives and requirements

Clone this repo, make a branch with your name, and push your branch to github when you complete the assignment.

Use PostgreSQL, PHP, HTML, CSS. 

Bootstrap, JavaScript, and/or Angular are optional.

Your code should connect to the database, fetch results, and loop through those results to build your menu page.

Your menu should group menu items by type and display them in different sections. 

You should apply at least basic styling to your menu page. If time permits and you are inclined, you can go nuts and make something really schnazzy. :-)

## Data

Create a database to hold the menu data:
    1. menu_items - with fields id, item_type_id, name, description, and price.
    2. item_types - with fields id, name.

Each menu item is linked to an item type through the item_type_id field.

Your ice cream shop's menu will have 4 types of products:
    1. Regular ice cream flavors
    2. Seasonal ice cream flavors
    3. Toppings
    4. Serving options

Examples of regular ice cream flavors:
    1. Chocolate
    2. Vanilla
    3. Strawberry

Examples of seasonal ice cream flavors:
    1. Peppermint
    2. Pumpkin spice

Examples of toppings:
    1. Chocolate sauce
    2. Whipped cream
    3. Sprinkles

Examples of serving options:
    1. Cone
    2. Cup

If you're feeling creative, you can make your own data set. If not, you can use the examples above or the hint files.
    
## Application file structure

Minimally:

  app/
    index.php - menu page
    functions.php - separate file for your PHP functions
    style.php - additional styling
  README.md

Make sure there's something to read in your README file.

It's okay if your project has more files, but you need at least the ones listed above.

## If you get stuck...

Take a look at hints-full-regular.md (or hints-full-starwars.md if that's your fandom).

