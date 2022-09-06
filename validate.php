<?php
session_start();
$myUser = "bernat@assembler.com";
$myPwd = "P@ssw0rd";

if($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd){
    $_SESSION["user"] = $_POST["user"];
    header("Location: panel.php");
} else{
    header("Location: index.php");
} 

?>