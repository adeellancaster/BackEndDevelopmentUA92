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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Teacher_ID = $_POST["Teacher_ID"];

    $sql = "DELETE FROM teacher WHERE Teacher_ID = $Teacher_ID";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
