<?php
include('config.php');

// Check if POST data is set
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ss", $username, $hashed_password);

    // Execute query
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Please enter both username and password";
}

// Close connection
$conn->close();
?>
