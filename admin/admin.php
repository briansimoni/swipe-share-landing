<?php
session_start();
if($_SESSION["loggedIn"] !== true) {
    header("Location: /admin/login.php");
    die();
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- TODO: implement favicon!!! -->
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">

    <title>Swipe Share App</title>
</head>

<body>

<?php if ($result->num_rows > 0) { ?>

    <ol>
    <?php while($row = $result->fetch_assoc()) { ?>
        <?php echo "<li>" . $row["email"] . "</li>" ?>
    <?php } ?>
    </ol>
<?php } ?>
<?php $conn->close(); ?>

</body>
