<?php
session_start();
if(!isset($_SESSION["user"]))header("Location: index.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="login">
        <h1> You are logged in </h1>
        <a class="sign-out" href="close_session.php"> SIGN OUT </a>
    </div>
</body>
</html>