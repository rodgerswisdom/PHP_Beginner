<?php
    require_once './config/database.php';    

    $name ="user";
    echo "Welcome $name";

    $query = "SELECT * FROM users";
    $result = $connection->query($query);

    if (!$result) die("Fatal Error");

    $rows = $result->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $result->data_seek($j);
        echo 'First Name: ' .htmlspecialchars($result->fetch_assoc()['f_name']) .'<br>';
        $result->data_seek($j);
        echo 'Last Name: '
        .htmlspecialchars($result->fetch_assoc()['l_name'])
        .'<br>';
        $result->data_seek($j);
        echo 'Email: '.htmlspecialchars($result->fetch_assoc()['email']).'<br>';
        $result->data_seek($j);
        echo 'Phone: '
        .htmlspecialchars($result->fetch_assoc()['phone'])
        .'<br>';
        //$result->data_seek($j);
        //echo 'ISBN: '
        //.htmlspecialchars($result->fetch_assoc()['isbn'])
        .'<br><br>';
    }
    $result->close();
    $connection->close();
?>
