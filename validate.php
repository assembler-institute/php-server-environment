<?php

$Id = $_REQUEST["id"];
$password = $_REQUEST["id-pass"];
$correctId = "1234";
$correctPw = "4321";

if($Id === $correctId && $password === $correctPw){
    session_start();
    $_SESSION["id"] = $Id;
    header("Location: panel.php");
} else{
    header("Location: index.php?error-area=incorrect");
}

?>