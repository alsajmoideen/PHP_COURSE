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
$sql = 'SELECT EMP_ID,EMP_NAME,EMP_SALARY FROM EMPLOYEE';

// Table Display Here
if(mysqli_query($conn,$sql)){
    echo "Table Data<br>";
}else{
    echo "Error :" . mysqli_error($conn);
}

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    // Output Data of each row
    
}
?>