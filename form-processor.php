<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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
$stmt = $conn->prepare("INSERT INTO swipeshare.emails (email) VALUES (?)");
$stmt->bind_param("s", $email);

// set parameters and execute

$email = $_POST["email"];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email submitted: ({$email})");
}

$stmt->execute();

$conn->close();

echo "Thanks for submitting {$email}";