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
    $classID = $_POST['classID'];
    $className = $_POST['className'];
    $Email = $_POST['Email'];
    $teacherID = $_POST['teacherID'];

    $classID  = mysqli_real_escape_string($conn, $classID );
    $className = mysqli_real_escape_string($conn, $className);
    $Email = mysqli_real_escape_string($conn,$Email);
    $teacherID = mysqli_real_escape_string($conn,$teacherID);
    
    //Add Class data in database
    $sql = "INSERT INTO class (classID, className, Email, teacherID) VALUES (' $classID ', '$className', '$Email','$teacherID')";
    // Save the class data and for simplicity, let's just display the class information here
    if ($conn->query($sql) === true) 
    {
    echo "Class has been successfully Inserted";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
