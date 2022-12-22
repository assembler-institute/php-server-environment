<?php

$email = "info@php.net";
$pass = "13243546";

if ($email == $_POST["email"] && $pass == $_POST["pass"]) {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    header("Location: panel.php");
} else {
    header("Location: index.php");
}