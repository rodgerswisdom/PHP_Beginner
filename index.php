<?php
    require_once './config/database.php';    
    
    echo"<h1>Welcome to our auth service</h1>";
    $result = dbConnect();
    echo "Connected Successfully";
    dbClose($result);
?>
