<?php
session_start();
require "../config.php";
if($_SESSION["loggedIn"] === true) {
    header("Location: /admin/admin.php");
    die();
}

if($_POST["password"] === ADMIN_PASSWORD) {
    $_SESSION["loggedIn"] = true;
    header("Location: /admin/admin.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin Login</title>
</head>
<body>
<h1>Login Here</h1>

<form id="login-form" action="/admin/login.php" method="POST">
    <input type="password" name="password" id="password" placeholder="password">
    <br />
    <input type="submit" value="Submit">
</form>

</body>
</html>