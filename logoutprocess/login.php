<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Redirect to the dashboard or home page
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Perform login authentication (you need to replace this with your actual authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication (replace this with your actual authentication logic)
    if ($username === 'demo' && $password === 'password') {
        $_SESSION['user_id'] = 1; // Set a session variable to indicate the user is logged in
        header("Location: dashboard.php"); // Redirect to the dashboard or home page
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error_message)) { echo "<p style='color:red;'>$error_message</p>"; } ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
