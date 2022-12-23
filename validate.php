<?php

$dbUserEmail = "example@example.com";
$dbPassword = "123456";

function dataUserValidation($dbUserEmail, $dbPassword) {
    if($dbUserEmail === $_REQUEST["email"] && $dbPassword === $_REQUEST["password"]){
        session_start();
        $_SESSION["userEmail"] = $_REQUEST["email"];
        header("Location: panel.php"); 
    }
    else {
        header("Location: index.php?error1");
    }
}





dataUserValidation($dbUserEmail, $dbPassword);

?>