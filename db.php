<?php
$servername = "localhost";
$username = "root";  // Change if needed
$password = "";      // Change if you have a database password
$database = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
