<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'zane');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//CHECK CONNECTION
 if ($conn->connect_error) {
     die('connection failed' . $conn->connect_error);
    
 }
 

?>
