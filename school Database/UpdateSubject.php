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
    $Subject_ID = $_POST['Subject_ID'];
    $Subject_Name= $_POST['Subject_Name'];
    $Class_ID = $_POST['Class_ID'];

    $Subject_ID  = mysqli_real_escape_string($conn, $Subject_ID );
    $SUBJECT_Name= mysqli_real_escape_string($conn, $Subject_Name);
    $Class_ID = mysqli_real_escape_string($conn,$Class_ID);
    
    
    $sql = "UPDATE subject SET Subject_Name='$Subject_Name', Class_ID='$Class_ID' WHERE Subject_ID='$Subject_ID'";
    
    if ($conn->query($sql) === true) 
    {
    echo "Subject has been successfully Updated";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
