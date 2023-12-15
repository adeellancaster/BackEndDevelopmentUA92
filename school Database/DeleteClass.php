<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "st_alphonsus_school";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
else {
    echo "";
    
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $classID = $_POST["classID"];

    // SQL to delete a class
    $sql = "DELETE FROM class WHERE classID = $classID";

    if ($conn->query($sql) === TRUE) {
        echo "Class deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
