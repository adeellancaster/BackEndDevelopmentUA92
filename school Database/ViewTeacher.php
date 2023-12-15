<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
         background-color: white;
         color: black;
         }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;

        }
   
    </style>
 <table>
        <tr>
            <th>Teaher ID</th>
            <th> Name</th>
            <th>Address</th>
           
        </tr>

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

$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <th>{$row['Teacher_ID']}</th>
        <th>{$row['Name']}</th>
        <th>{$row['Address']}</th>
        </tr>";
    }
    echo "</tr>";
} else {
    echo "No Teachers found.";
}
mysqli_close($conn);
?>
</table>

</head>
<body>