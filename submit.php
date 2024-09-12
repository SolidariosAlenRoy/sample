<?php
session_start();

include('config.php');

    // Check if all required fields are set and not empty
    if (!empty($_POST['full_name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['gender'])) {

        // Capture form data and sanitize inputs
        $full_name = $conn->real_escape_string($_POST['full_name']);
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $phone_number = $conn->real_escape_string($_POST['phone_number']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $gender = $conn->real_escape_string($_POST['gender']);

        // Check if passwords match
        if ($password !== $confirm_password) {
            die("Passwords do not match.");
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (full_name, username, email, phone_number, password, gender) VALUES (?, ?, ?, ?, ?, ?)");

        // Check if the statement was prepared correctly
        if (!$stmt) {
            die("SQL Error: " . $conn->error);
        }

        // Bind the parameters
        $stmt->bind_param("ssssss", $full_name, $username, $email, $phone_number, $hashed_password, $gender);

        // Execute the query and check if successful
        if ($stmt->execute()) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // If any field is missing
        echo "All fields are required!";
    }

    // Close the connection
    $conn->close();

?>
