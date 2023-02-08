<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "Nathalia");
    define("DB_PASS", "password");
    define("DB_NAME", "php-dev");

    //creating connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check the connection
    if($conn -> connect_error){
        die ("Connection Failed" . $conn->connect_error);
    };
 
  