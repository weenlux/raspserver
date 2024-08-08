<?php
// Database credentials
$host = 'localhost';
$db = 'my_website';
$user = 'root';
$pass = 'yourpassword'; // Replace with your database password

// Create connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Get the password from the form
$input_password = $_POST['5267135'];

// Query the database to check the password
$query = "SELECT * FROM users WHERE password = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $input_password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the password is correct
if ($result->num_rows > 0) {
    header('Location: welcome.php'); // Redirect to the welcome page
} else {
    header('Location: index.php?error=true'); // Redirect back to the homepage with error
}

$stmt->close();
$mysqli->close();
?>
