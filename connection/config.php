<?php

$server_name="localhost";
$user_name="root";
$password ="";
$database_name="tms2";

$conn = new mysqli ($server_name, $user_name, $password, $database_name);

// if($conn){
//     echo "Database is connected Successfully";
// }
// else{
//     echo "Error, Database is not connected";
// }
if(!$conn){
    echo "Error, Database is not connected ";
}
// else{
//     echo " Database is  connected Successfully";
// }


?>