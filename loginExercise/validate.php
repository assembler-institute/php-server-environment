<?php

session_start();

$user = "ruben@ruben.com";
$pass = "1234";

if ($user===$_REQUEST["email"] && $pass===$_REQUEST["password"]){
    header("Location: panel.php");
} else if ($_REQUEST["password"] === "" && $_REQUEST["email"] === "") {
    header("Location: index.php?error=bothempty");
} else if ($_REQUEST["email"] === "") {
    header("Location: index.php?error=userempty");
} else if ($_REQUEST["password"] === "") {
    header("Location: index.php?error=passempty");
} else {
    header("Location: index.php?error=incorrect");
}

?>