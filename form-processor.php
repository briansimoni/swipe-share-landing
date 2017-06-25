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

$stmt = $conn->prepare("INSERT INTO emails (email) VALUES (?)");
$stmt->bind_param("s", $email);

// set parameters and execute

$email = $_POST["email"];
$stmt->execute();

$conn->close();

echo "Thanks for submitting {$email}";