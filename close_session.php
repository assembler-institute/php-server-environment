<?php
session_start();

if(isset($_POST["clouse"])){
    // session_destroy();
    unset($_SERVER);
    header('Location: index.php');
}
?>