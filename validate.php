<?php

session_start();

$userdb = "Javier";
$passdb = "121212";

if($userdb===$_REQUEST["user"] && $passdb===$_REQUEST["pass"]){
    header("Location: panel.php");
} else if($_REQUEST["user"] === ""){
    header("Location: index.php?error=userempty");
} else if($_REQUEST["pass"] === ""){
    header("Location: index.php?error=passempty");
} else {
    header("Location: index.php?error=error");
}

?>