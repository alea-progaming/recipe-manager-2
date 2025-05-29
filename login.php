<?php 
    include("signup-process.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if (isset($_POST["save-cred"])) {
            print_r($_POST);
        }
    ?>
</body>
</html>