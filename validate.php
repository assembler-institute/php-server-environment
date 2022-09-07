<?php
 session_start();



$myUser = "Mike";

$myPwd = "123";

if($_POST["userName"] == $myUser && $_POST["pwd"] == $myPwd){
   
    $_SESSION["userName"] = $_POST["userName"];
 
    header("Location: panel.php");
} else {
    header("Location: 01.index.php");
}