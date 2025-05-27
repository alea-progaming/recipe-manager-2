<?php

if (empty($_POST['name'])) {
    die("Name is required");
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email");
}

if (strlen($_POST) < 8) {
    die("Password must be at least 8 characters")
}

if (!preg_match("/[a-z]/i", $_POST['pass'])) {
    die("Password must contain at least one letter")
}
if (!preg_match("/[0-9]/", $_POST['pass'])) {
    die("Password must contain at least one number")
}



print_r($_POST);