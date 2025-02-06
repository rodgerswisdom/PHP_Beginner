<?php
require_once './config/database.php';    

class users
{
   public function __construct(){
        $result  =dbConnect();
    }

   public function signup($f_name, $l_name, $email, $phone){
        $query = "INSERT INTO users
           (f_name, l_name,email,phone)
            VALUES($f_name, $l_name, $email, $phone);";
        
        $query_result = $$result->query($query);

        if(!query_result) die ('Fatal Error');

        echo "Signed up successfully";        
    }
   // dbClose($result);
}

?>
