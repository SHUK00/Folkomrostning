<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkomrostning";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO person (name, epost, ort)
VALUES ('$_POST[name]', '$_POST[epost]', '$_POST[ort]')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>