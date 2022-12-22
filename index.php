<?php
require_once("./modules/sessioncontrol.php");
checkUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <form id="login-form" action="./modules/login.php" method="POST">
            <label for="email">3mail</label>
            <input required type="email" name="email" id="email">
            <label for="password">P4ss</label>
            <input required type="password" name="password" id="password">
            <button type="submit">Enter</button>
        </form>
    </header>
    <main id="login-section">
        <h1 id="title" class="title">WORK SP4C3</h1>
        <h2 id="subtitle" class="subtitle">Do your magic</h2>
        <?php
        checkLoginError();
        ?>
    </main>
</body>

</html>
