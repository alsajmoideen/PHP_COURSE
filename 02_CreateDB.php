<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

// Connect to MySQL Database
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error){
    die("Connecton error:" . $conn->connect_error);
}

echo "Connection Success <br>";

// Create Database
$sql = "CREATE DATABASE TESTDB";

$conn->query("DROP DATABASE TESTDB"); // Drop database if it exists

if($conn->query($sql) === TRUE){
    echo "Database Created Success";
}else{
    echo "Error creating DB " . $conn->error;
}

// Close DB Connection
mysqli_close($conn);
?>