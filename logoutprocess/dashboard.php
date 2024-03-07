<?php
session_start();

// Check if the user is not logged in
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
