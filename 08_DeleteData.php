<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = "testdb"; // <--------------------------------------- YOUR DATABASE NAME ---------------------------------------

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
    die("Connecton error:" . $conn->connect_error);
}

echo "Connection Success<br>";

$emp_id = 3;

// SQL Query
$sql = "DELETE FROM EMPLOYEE WHERE EMP_ID = $emp_id"; // <-------------------- YOUR TABLE NAME --------------------

// Delete Data from Table Here
if(mysqli_query($conn,$sql)){
    echo " Record Deleted Successfully";
}else{
    echo "Error :" . mysqli_error($conn);
}
?>