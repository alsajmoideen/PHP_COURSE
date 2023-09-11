<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = "testdb"; // <--------------------------------------- YOUR DATABASE NAME ---------------------------------------

// Connect to MySQL Database
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error){
    die("Connecton error:" . $conn->connect_error);
}

echo "Connection Success <br>";

// Select database
mysqli_select_db($conn,$db);
mysqli_close($conn);
?>