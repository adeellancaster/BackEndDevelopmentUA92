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
    $Teacher_ID = $_POST['Teacher_ID'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];

    $Teacher_ID  = mysqli_real_escape_string($conn, $Teacher_ID );
    $Name = mysqli_real_escape_string($conn, $Name);
    $Address = mysqli_real_escape_string($conn,$Address);

    $sql = "INSERT INTO teacher (Teacher_ID, Name, Address) VALUES (' $Teacher_ID ', '$Name', '$Address')";
  
    if ($conn->query($sql) === true) 
    {
    echo "Teacher has been successfully Inserted";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
