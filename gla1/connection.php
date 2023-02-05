Assignment - 1  Simranjit Singh, Samandeep Singh


<?php
$host = "localhost";
$username = "topca";
$password = "7800";
$dbname = "students";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("<br>"."Connection failed: " . mysqli_connect_error());
}
echo "<br>"."Connected successfully";
?>
