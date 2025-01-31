<?php
    require_once './config/database.php';    
// WE NEED TO CALL CLASSES FROM  HTML FILES
class users
{
    public $f_name = $_POST['f_name'];
    public $l_name = $_POST['l_name'];
    public $email = $_POST['email'];
    public $phone = $_POSt['phone'];
    // public $confirm_password;

    function __construct(){
        $result  =dbConnect();
    }

    function signup($f_name, $l_name, $email, $phone){
        $sign_up_date = time.now();
        $query = "INSERT INTO users
           (f_name, l_name,email,phone,last_signin)
            VALUES($f_name, $l_name, $email, $phone,$last_signin);";
        
        $query_result = $$result->query($query);

        if(!query_result) die ('Fatal Error');

        echo "Signed up successfully";        
    }
    dbClose($result);
}

?>
