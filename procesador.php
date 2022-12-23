<?php
$name = "Edgar";
$passwd = "12345";

if ($name == $_REQUEST["names"] && $passwd == $_REQUEST["passwords"]) {
    session_start();
    $_SESSION["users"] = $_REQUEST["names"];
    header("location:index.php?error=nolog");
    header("location:private.php");
} else {
    header("location:index.php?error=nolog");
}
?>