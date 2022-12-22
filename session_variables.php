<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Variables php</title>
</head>

<body>
    <a href="http://127.0.0.1/php-server-environment" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>Session Variables php</h1>

    <?php
    session_start();

    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['time'] = time();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    ?>

    <?php
    phpinfo();
    ?>

</body>

</html>