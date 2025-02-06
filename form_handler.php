<?php

include "users.php";

function get_form($f_name, $l_name, $email, $phone)
{
    if(isset($_POST['submit'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone = $_ POST['phone'];
    }


    $user = new users();
    $user->signup($f_name,$l_name,$email,$phone);

}
?>
