<?php  
// Database configuration  
$serverName = "localhost:3306";
$user = 'root';
$pass = '';
$db_name = 'weblab';
$conn = new mysqli($serverName, $user, $pass, $db_name) or die("Unable to connect");

?>