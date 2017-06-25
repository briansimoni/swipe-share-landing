<?php
$servername = "localhost";
$username = "swipe-share";
$password = "-w-Ln`%7V52kSRzE";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepared statement
$stmt = $conn->prepare("INSERT INTO emails (email) VALUES (?)");
$stmt->bind_param("s", $email);

// set parameters and execute

$email = $_POST["email"];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email submitted: ({$email})");
}

$stmt->execute();

$conn->close();

echo "Thanks for submitting {$email}";