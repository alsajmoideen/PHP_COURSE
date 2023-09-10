<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = "testdb";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
    die("Connecton error:" . $conn->connect_error);
}

echo "Connection Success<br>";

// SQL Query
$sql = "CREATE TABLE EMPLOYEE(EMP_ID INT NOT NULL AUTO_INCREMENT, EMP_NAME VARCHAR(20) NOT NULL,EMP_ADDRESS VARCHAR(20) NOT NULL,
EMP_SALARY INT NOT NULL,JOIN_DATE TIMESTAMP(6) NOT NULL,PRIMARY KEY(EMP_ID))";

// Table Creation Here
if(mysqli_query($conn,$sql)){
    echo "Employee Table Created Successfully";
}else{
    echo "Error creating table:" . mysqli_error($conn);
}
?>