<?php
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
$name = $conn->real_escape_string($_POST['names']);
$email = $conn->real_escape_string($_POST['email']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$birthday = $conn->real_escape_string($_POST['birthday']);
$password = $conn->real_escape_string($_POST['password']);

// Insert data into database
$sql = "INSERT INTO users (names, email, age, gender, birthday, passwords) VALUES ('$name', '$email', '$age', '$gender', '$birthday', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully'); window.location.href = 'loginform.html';</script>";
} else {
  echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}

// Close connection
$conn->close();
?>
