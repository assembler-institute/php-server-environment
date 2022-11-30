<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header ('location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Piggy Word Bank</title>
    <link rel="icon" type="./image/x-icon" href="./assets/img/piggy.ico">
    <link rel="stylesheet" href="./style.css">
    <script src="./components/game-database.js" defer></script>
    <script src="./components/game.js" defer></script>
    <script src="./components/ending.js" defer></script>
    <script src="./app.js" defer></script>
</head>
<body> 
    <main>
        <h1 class="title">Welcome to Piggy Word Bank</h1>
        <div id="mainDisplay" class="main-display">
            <div id="userAccess" class="user-access">
                <h2 class="title-user">Choose a user name</h2>
                <form id="form">
                    <label for="username">User name:</label>
                    <input type="text" id="username" maxlength="15" placeholder="Your user name..." required>
                    <input id="submitBtn" class="user-submit" type="submit" value="Start">
                </form>
                <button class="close"><a href="../close_session.php">Close session</a></button>
                
                <img class="background-piggy" src="assets\img\cookies.gif" alt="Chillin' piggy">
            </div>
        </div>
        <div id="rankingDisplay" class="ranking-display">
            <h1 class="ranking-title">Top scores:</h1>
            <ol id="topRank">

            </ol>
        </div>
    </main>
</body>
</html>