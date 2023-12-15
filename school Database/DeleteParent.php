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
    $Parent_ID = $_POST["Parent_ID"];

    $sql = "DELETE FROM parents WHERE Parent_ID = $Parent_ID";

    if ($conn->query($sql) === TRUE) {
        echo "Parents Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
