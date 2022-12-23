<?php

$user = $_REQUEST["user"];
$password = $_REQUEST["pass"];

$correctUser = "victor@hotmail.com";
$correctPassword = "1234";


if($user === $correctUser && $password === $correctPassword){
    session_start();
    $_SESSION["user"] = $user;
    header("Location: panel.php");
} else {
    header("Location: index.php?error=incorrect");   
}

?>