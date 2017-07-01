<?php
session_start();
if($_SESSION["loggedIn"] !== true) {
    die("nope");
}

$servername = "localhost";
$username = "swipe-share";
$password = "-w-Ln`%7V52kSRzE";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM swipeshare.emails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();