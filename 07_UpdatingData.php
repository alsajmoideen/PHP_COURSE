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

$emp_id = 2;
$emp_name = 'Alfas';
// SQL Query
$sql = "UPDATE EMPLOYEE SET EMP_NAME='$emp_name' WHERE EMP_ID=$emp_id";

// Table Insertion Here
if(mysqli_query($conn,$sql)){
    echo "New Record Updated Successfully";
}else{
    echo "Error :" . mysqli_error($conn);
}
?>