<?php

include "users.php";

function get_form($f_name, $l_name, $email, $phone)
{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }


    $user = new users();
    $message = $user->signup($f_name,$l_name,$email,$phone);
    
    header("Location: form.html?message=" . urlencode($message));
    exit();
}
?>
