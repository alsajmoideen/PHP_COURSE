<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error){
    die("Connecton error:" . $conn->connect_error);
}

echo "Connection Success";
?>