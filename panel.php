<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header ('location: ./index.php');
    } else {
        header ('location: ./piggy-word-bank/index.php');
    }
?>
