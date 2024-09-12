<?php
$servername = "localhost"; // Your server details
$db_username = "root";     // Your database username
$db_password = "";         // Your database password
$dbname = "usersinfo";     // Your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>