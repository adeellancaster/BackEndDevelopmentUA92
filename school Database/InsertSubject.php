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

    $Subject_ID = $_POST['Subject_ID'];
    $Subject_Name= $_POST['Subject_Name'];
    $Class_ID = $_POST['Class_ID'];

    $Subject_ID  = mysqli_real_escape_string($conn, $Subject_ID );
    $Subject_Name= mysqli_real_escape_string($conn, $Subject_Name);
    $Class_ID = mysqli_real_escape_string($conn,$Class_ID);
    
    $sql = "INSERT INTO subjects (Subject_ID, Subject_Name, Class_ID,) VALUES (' $Subject_ID ', '$Subject_Name', '$Class_ID')";
    
    if ($conn->query($sql) === true) 
    {
    echo "Subject has been successfully Inserted";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
