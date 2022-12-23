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
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
</style>
    
    <title>Panel</title>
</head>
<body>
    <h1>You're In!</h1>
    <a href="close_session.php" class="btn btn-link">Logout</a>
</body>
</html>