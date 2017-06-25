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
echo "Connected successfully";