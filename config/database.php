<?php

function dbConnect(){
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'auth_php_db';

    $connection = new mysqli($hostname, $username, $password, $database);
    if($connection->connect_error){
        die("Error Connecting Databse");
    }
    return $connection;
}
function dbClose(){
    $connection->close();
}
?>
