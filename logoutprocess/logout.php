<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
<head>
    <title>Logout</title>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>
