<?php

$adminUser = "admin@assembler.com";
$adminPwd = "P@ssw0rd";


if (isset($_POST["user"]) && isset($_POST["pwd"])) {
    // var_dump($_POST);
    if ($_POST["user"] == $adminUser && $_POST["pwd"] == $adminPwd) {
        // echo "CORRECT";
        session_start();
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pwd"] = $_POST["pwd"];

        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php?msg=errorLogin");
    }
}
