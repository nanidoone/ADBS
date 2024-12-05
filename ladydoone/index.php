<?php
session_start(); // Start the session if needed
// Check if the user is logged in (adjust condition to fit your logic)
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: modules/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My Website</h1>
        <div class="button-group">
            <a href="modules/register.php" class="button">Register</a>
        </div>
    </div>
</body>
</html>
