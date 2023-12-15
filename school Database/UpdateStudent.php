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
    echo " ";
    
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $studentID = $_POST['studentID'];
    $Name = $_POST['Name'];
    $DateOfBirth = $_POST['DateOfBirth'];

    $studentID  = mysqli_real_escape_string($conn, $studentID );
    $Name = mysqli_real_escape_string($conn, $Name);
    $DateOfBirth = mysqli_real_escape_string($conn,$DateOfBirth);
    
    $sql = "UPDATE students SET Name='$Name', DateOfBirth= '$DateOfBirth' WHERE studentID='$studentID'";
    if ($conn->query($sql) === true) 
    {
    echo "Student has been successfully updated";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
