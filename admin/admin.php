<?php
session_start();
if($_SESSION["loggedIn"] !== true) {
    die("nope");
}

echo "you're an admin";