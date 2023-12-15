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
    $Subject_ID = $_POST["Subject_ID"];

    $sql = "DELETE FROM subjects WHERE Subject_ID = $Subject_ID";

    if ($conn->query($sql) === TRUE) {
        echo "Subject Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
