<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            margin: 20px 0;
            text-align: center;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            margin: 20px 0;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    </header>

    <nav>
        <a href="#profile">Profile</a>
        <a href="#dashboard">Dashboard</a>
        <a href="#settings">Settings</a>
        <a href="logout.php">Logout</a>
    </nav>

    <main>
        <section id="profile">
            <h2>Your Profile</h2>
            <p>Manage your personal details and update your preferences.</p>
        </section>

        <section id="dashboard">
            <h2>Dashboard</h2>
            <p>Here you can find quick insights into your account activities.</p>
            <ul>
                <li>Last Login: <?php echo date("Y-m-d H:i:s"); ?></li>
                <li>Account Status: Active</li>
                <li>Recent Activities: None</li>
            </ul>
        </section>

        <section id="settings">
            <h2>Settings</h2>
            <p>Customize your experience by adjusting the settings below.</p>
            <ul>
                <li><a href="#change-password">Change Password</a></li>
                <li><a href="#notifications">Manage Notifications</a></li>
                <li><a href="#privacy">Privacy Settings</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
