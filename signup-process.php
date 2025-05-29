<?php

if(isset($_POST["save-cred"])) {
    if (empty($_POST["name"])) {
    $name_valstat = "Name is required";
        echo "<p class='text-danger my-0'>";
        echo $name_valstat;
        echo "</p>";
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $email_valstat = "Enter a valid email";
        echo "<p class='text-danger my-0'>";
        echo $email_valstat;
        echo "</p>";
    }

    if (strlen($_POST["pass"]) < 8) {
    $pass_valstat1 = "Password must be at least 8 characters";
        echo "<p class='text-danger my-0'>";
        echo $pass_valstat1;
        echo "</p>";
    }

    if (!preg_match("/[a-z]/i", $_POST["pass"])) {
    $pass_valstat2 = "Password must contain at least one letter";
        echo "<p class='text-danger my-0'>";
        echo $pass_valstat2;
        echo "</p>";
    }

    if (!preg_match("/[0-9]/", $_POST["pass"])) {
    $pass_valstat3 = "Password must contain at least one number";
        echo "<p class='text-danger my-0'>";
        echo $pass_valstat3;
        echo "</p>"; 
    }

    if ($_POST["pass"] !== $_POST["pass_confirmation"]) {
        $passconfirm_valstat = "Password must match";
        echo "<p class='text-danger my-0'>";
        echo $passconfirm_valstat;
        echo "</p>"; 
    }

    $pass_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT );

    var_dump($pass_hash);
}



// print_r($_POST);