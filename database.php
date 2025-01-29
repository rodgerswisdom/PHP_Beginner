<?php
    $hostname = 'localhost',
    $username = 'root',
    $password = '',
    $database = 'auth_php_db',

    $connection = new mysql($hostname, $username, $password, $database);
    if($connection->connect_error){
        die("Error Connecting Databse");
    }
?>
