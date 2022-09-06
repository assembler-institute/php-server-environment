<?php
session_start();
$myUser = "holi@holi.com";
$myPwd = "patata";

if($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd ){

    $_SESSION["user"]=$myUser;
    header("Location: panel.php");
} else {
    header("Location: index.php");

}