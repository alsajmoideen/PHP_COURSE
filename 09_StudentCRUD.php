<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'testdb'; // <--------------------------------------- YOUR DATABASE NAME ---------------------------------------

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
echo "connected successfully";
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $mark = $_POST['mark'];
    $grade = $_POST['grade'];
    $sql = "INSERT INTO STUDENT(stid,name, roll, mark, grade) VALUES ('NULL','$name','$rollno','$mark','$grade')";

    if (mysqli_query($conn, $sql)) {
        echo "inserted successfully";
    } else {
        echo "error inserting data" . mysqli_error($conn);
    }
}
if (isset($_POST['Delete'])) {
    $mark1 = $_POST['mark1'];
    $sql = "DELETE FROM STUDENT WHERE mark<=$mark1";
    if (mysqli_query($conn, $sql)) {
        echo "deleted successfully";
    } else {
        echo "error deleting data" . mysqli_error($conn);
    }
}
if (isset($_POST['Update'])) {
    $mark2 = $_POST['mark2'];
    $grade1 = $_POST['grade1'];
    $sql = "UPDATE STUDENT SET grade='$grade1' WHERE mark<=$mark2";
    if (mysqli_query($conn, $sql)) {
        echo "updated successfully";
    } else {
        echo "error updating data" . mysqli_error($conn);
    }
}
?>

<html>

<head>
    <title>
        Student CRUD
    </title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <br><br>
        student name:<input type="text" name="name"><br><br>
        student Roll No:<input type="text" name="rollno"><br><br>
        student mark:<input type="text" name="mark"><br><br>
        student grade:<input type="text" name="grade"><br><br>
        <input type="submit" name="insert" value="insert"><br><br>
        student mark:<input type="text" name="mark1"><br><br>
        <input type="submit" name="Delete" value="Delete"><br><br>
        student mark:<input type="text" name="mark2"><br><br>
        student grade:<input type="text" name="grade1"><br><br>
        <input type="submit" name="Update" value="Update"><br><br>
    </form>
    <?php
    $sql = "SELECT stid, name, roll, mark, grade FROM STUDENT";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Student id: " . $row["stid"] . "<br><br>";
            echo "Student name: " . $row["name"] . "<br><br>";
            echo "Student rollno: " . $row["roll"] . "<br><br>";
            echo "Student mark: " . $row["mark"] . "<br><br>";
            echo "Student grade: " . $row["grade"] . "<br><br>";
        }
    } else {
        echo "zero result";
    }
    ?>
</body>

</html>