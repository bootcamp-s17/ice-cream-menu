<?php 

   require $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
      $dotenv = new Dotenv\Dotenv($_SERVER['DOCUMENT_ROOT']);
      $dotenv->load();

      
   function db (){
      return pg_connect("
            host = $_ENV[host]
            port = $_ENV[port]
            dbname = $_ENV[dbname]
            user = $_ENV[user]
            password = $_ENV[password]
         ");
   }   

 ?>  