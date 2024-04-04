<?php
session_start(); // Start session to store user authentication status

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "zodiac";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE email = '$email' AND passwords = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User exists, set session variables and redirect to dashboard or homepage
    $_SESSION['email'] = $email;
    header("Location: home.php"); // Redirect to dashboard or homepage
} else {
    // User doesn't exist or invalid credentials, redirect back to login page with error message
    echo "<script>alert('Wrong Email or Password'); window.location.href = 'loginform.html';</script>"; // Redirect back to login page
}

// Close connection
$conn->close();
?>
