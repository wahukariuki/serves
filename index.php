<?php 
echo('welcome to this website');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .buttons {
            margin: 20px 0;
        }
        .buttons button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .buttons button:hover {
            background-color: #45a049;
        }
        .content {
            text-align: left;
            margin: 20px;
            font-size: 18px;
            line-height: 1.6;
        }
        .image-container {
            margin: 20px 0;
        }
        .image-container img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Welcome to This Website</h1>
            <p>We are glad to have you here!</p>
        </div>

        <!-- Buttons for Login and Sign Up -->
        <div class="buttons">
            <button onclick="location.href='login.php'">Log In</button>
            <button onclick="location.href='signup.php'">Sign Up</button>
        </div>

        <!-- Additional Content Section -->
        <div class="content">
            <h2>Why Choose Us?</h2>
            <p>We offer a variety of services designed to improve your experience and make your tasks easier. Join our community and start benefiting from all our features.</p>
            <p>Our platform is secure, easy to use, and designed to help you manage your finances effectively. Explore now and get started with our personalized tools.</p>
        </div>

        <!-- Image/Graphics Section -->
        <div class="image-container">
            <img src="server-admin/image.png" alt="Image">
        </div>

    </div>

</body>
</html>
