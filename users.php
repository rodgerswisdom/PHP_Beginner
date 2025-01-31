<?php
    require_once './config/database.php';    

class Auth
{
    public $f_name;
    public $l_name;
    public $email;
    public $phone;
    // public $confirm_password;

    function __construct(){
        $result  =dbConnect();
    }

    function signup($f_name, $l_name, $email, $phone){
        $sign_up_date = time.now();
        $query = "INSERT INTO users
           (f_name, l_name,email,phone,last_signin)
            VALUES($f_name, $l_name, $email, $phone,$last_signin);";
        
             
    }
    dbClose($result);
}

?>
