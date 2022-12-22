<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?error=privatezone");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privado</title>
</head>
<body>
    <h1>PRIVADO</h1>
    <a href="close_session.php">Logout</a>
</body>
</html>