<?php

$correctUserName = "Alvaro";
$correctPassword = "123123";


if($_POST["userName"] === $correctUserName && $_POST["password"] === $correctPassword) {
    session_start();
    $_SESSION["userName"]=$_POST["userName"];
    header("location: panel.php");
}else{
    header("location: index.php?error=loginFailed");
}

?>