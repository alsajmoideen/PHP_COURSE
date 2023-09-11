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

// SQL Query
$sql = 'SELECT * FROM EMPLOYEE'; // <-------------------- YOUR TABLE NAME --------------------

// Table Display Here
if(mysqli_query($conn,$sql)){
    echo "Table Data<br>";
}else{
    echo "Error :" . mysqli_error($conn);
}

$result = mysqli_query($conn,$sql);

// Displaying the Data
if(mysqli_num_rows($result)>0){
    // Output Data of each row
    while($row = mysqli_fetch_assoc($result)){
        echo "EMP ID: " . $row["EMP_ID"]."<br>"."EMP_NAME: " . $row["EMP_NAME"]."<br>"."EMP_ADDRESS: " . $row["EMP_ADDRESS"]."<br>". 
        "EMP_SALARY: " . $row["EMP_SALARY"]."<br>"."JOIN_DATE: " . $row["JOIN_DATE"]."<br>";
    }
}else{
    echo "0 Results";
}

mysqli_close($conn);
?>