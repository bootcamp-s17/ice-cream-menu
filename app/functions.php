 <?php
 
    function getDb() {
        $db = pg_connect("host=localhost port=5432 dbname=icecream user=icecream password=icecream");
        return $db;
    }

    function getRegIceCream($db) {
        $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE item_type_id = 5 order by name;");
        return pg_fetch_all($request);
    }
    function SeasIceCream($db) {
        $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE item_type_id = 6 order by name;");
        return pg_fetch_all($request);
    }
    function getToppings($db) {
        $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE item_type_id = 7 order by name;");
        return pg_fetch_all($request);
    }
    function getOptions($db) {
        $request = pg_query(getDb(), "SELECT * FROM menu_items WHERE item_type_id = 8 order by name;");
        return pg_fetch_all($request);
    }


    //   function getRegIceCream($db) {
    //     $request = pg_query(getDb(), "SELECT * FROM menu_items order by item_type_id;");
    //     return pg_fetch_all($request);
    // }

    // function getSeasIceCream($db) {
    //     $request = pg_query(getDb(), "SELECT * FROM colors order by color_name;");
    //     return pg_fetch_all($request);
    // }

    // function getToppings($db) {
    //     $request = pg_query(getDb(), "SELECT * FROM colors order by color_name;");
    //     return pg_fetch_all($request);
    // }

    // function getOptions($db) {
    //     $request = pg_query(getDb(), "SELECT * FROM colors order by color_name;");
    //     return pg_fetch_all($request);
    // }
?>