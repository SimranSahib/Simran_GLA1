<?php
$host = "localhost";
$username = "topca";
$password = "7800";
$dbname = "students";

// creating the connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
