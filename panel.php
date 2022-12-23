<?php
session_start();

if (!isset($_SESSION["user"]) || !isset($_SESSION["password"])) {
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>
    <title>Privado</title>
</head>

<body class="text-center m-5">
    <main class="abs-center w-50 m-auto p-3 mb-2 bg-info text-dark bg-opacity-25">
    <h3>Private page</h3>

    <?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

    $username = "Iuliia"
    echo "Welcome $username! <br><br>";
    echo "<b>Your session dates:</b> <br> Browser: $_SERVER[HTTP_USER_AGENT],<br> IP: $_SERVER[REMOTE_ADDR],<br> Username: $_SESSION[user],<br> Password: $_SESSION[password]<br>";

    ?>

    <br>
    <div>
        <a href="./close_session.php" class="w-30 btn btn-md btn-info">Close session</a>
    </div>

</main>
</body>
</html>