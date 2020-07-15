<?php
/*
This file contains database configuration assuming you are running mysql using user "root" ; password "" 
; database name "Credit Management".
make sure that mysql is runing on port no "3307"
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id14337924_cerditm');
define('DB_PASSWORD', 'S@nketSony7117');
define('DB_NAME', 'id14337924_creditmanagement');


// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == true){
   // echo "Connection Establish";
}
else{
    dir('Error: Cannot connect');
}

?>