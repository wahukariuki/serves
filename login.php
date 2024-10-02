<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CAT1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from POST request
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);

// Execute the statement
$stmt->execute();

// Store the result
$stmt->store_result();

// Check if a row was returned
if ($stmt->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

// Close connections
$stmt->close();
$conn->close();
?>