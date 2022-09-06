<?php
session_start(); // we need to use it to access session variables in this file.

print_r($_POST);
echo "<br>", $_POST["user-email"];
echo "<br>", $_POST["user-password"], "<br>";

// Data entered by the user.
$userEmail = $_POST["user-email"]; // user-email is the name attribute of the input.
$userPassword = $_POST["user-password"];

// Data that we consider correct to execute the login.
$correctEmail = "user@gmail.com";
$correctPassword = "123qwe";

if ($userEmail === $correctEmail && $userPassword === $correctPassword) {
    $_SESSION["user"] = $userEmail; // is just an array stored on the server where we will store values.
    #print_r($_SESSION); //to watch the print_r we have to comment the header().
    header("Location: ./panel.php"); // to redirect to another file.
} else {
    header("Location: ./index.php");
}
