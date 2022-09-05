<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Panel </h1>
    <?php
        if (isset($_SESSION['user'])) {
            echo 'You can see the panel';
            echo '<br><br><button><a href="./close_session.php">Close session</a></button>';
        } else {
            header ('location: ./index.php');
        }
    ?>
</body>
</html>