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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $user);

        // Execute the statement
        $stmt->execute();

        // Store the result
        $stmt->store_result();

        // Bind the result to a variable
        $stmt->bind_result($hashed_password);

        // Fetch the result
        if ($stmt->fetch()) {
            // Verify the password
            if (password_verify($pass, $hashed_password)) {
                echo "Login successful!";
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }

        // Close connections
        $stmt->close();
        $conn->close();
    } else {
        echo "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>