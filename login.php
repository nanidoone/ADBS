<?php
ini_set('display_errors', 1); // Display errors on screen
error_reporting(E_ALL); // Report all errors

// Database connection details
$servername = "localhost";
$dbusername = "root";
$dbpassword = ""; // Default is empty in XAMPP
$dbname = "login_system"; // Name of your database

// Create a connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the entered username and password exist in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if any row matches the credentials
    if ($result->num_rows > 0) {
        // Credentials are correct, redirect to inventory page
        header("Location: inventory.html");
        exit(); // Make sure the script stops here to avoid further output
    } else {
        // Credentials are incorrect, display error
        echo "Invalid username or password!";
    }
} else {
    echo "Please enter username and password.";
}

// Close the connection
$conn->close();
?>
