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
$sql = 'INSERT INTO EMPLOYEE(EMP_NAME,EMP_ADDRESS,EMP_SALARY,JOIN_DATE) VALUES("ALSAJ","NELLIMATTATHIL",2000,NOW())';

// Table Insertion Here
if(mysqli_query($conn,$sql)){
    echo "New Record Created Successfully";
}else{
    echo "Error :" . mysqli_error($conn);
}
?>