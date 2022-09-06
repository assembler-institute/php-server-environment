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
    <title>Choose game</title>
    <link rel="stylesheet" href="./css/panel.css">
    <script src="https://kit.fontawesome.com/fe24ce668c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php
            echo '<h1>Welcome to the game panel,<br> ' . $_SESSION['user'] .  '.</h1>'
        ?>
    </header>
    <main>
        <article>
            <h2 class="list-title">Choose a game!</h2>
            <ul class="games-list">
                <a href="./piggy-word-bank/index.php"><li><i class="fa-solid fa-gamepad"></i> Piggy word bank</li></a>
                <li>.</li>
                <li>.</li>
                <li>.</li>
                <li>More games to come...</li>
            </ul>
            <small class="close-session"><a href="./close_session.php">Close session</a></small>
        </article>
    </main>
</body>
</html>
