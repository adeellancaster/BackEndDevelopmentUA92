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
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $Parent_ID = $_POST['Parent_ID'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Telephone = $_POST['Telephone'];

    $Parent_ID = mysqli_real_escape_string($conn,$Parent_ID);
    $Name = mysqli_real_escape_string($conn, $Name);
    $Address = mysqli_real_escape_string($conn,$Address);
    $Email = mysqli_real_escape_string($conn,$Email);
    $Telephone = mysqli_real_escape_string($conn,$Telephone);
   
    $sql = "UPDATE parents SET Name='$Name', Address= '$Address', Email='$Email', Telephone='$Telephone' WHERE Parent_ID='$Parent_ID'";
    
    if ($conn->query($sql) === true) 
    {
    echo "Parents Updated successfully";
     }
     else {
    echo "Error: ".$sql. "<br>" . $conn->error;
    }
}
     $conn->close();
    
?>
