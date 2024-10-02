<?php
// Database configuration
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

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    // Hash the password
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $hashed_password, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New user created successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>