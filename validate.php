<?php

//Pra descrever Array ( [user] => 
// print_r($_POST);

// Pra imprimir (POST) usuário e senha 
// echo $_POST["user"];
// echo $_POST["pwd"];


$adminUser = "admin@assembler.com";
$adminPwd = "P@ssw0rd";


if (isset($_POST["user"]) && isset($_POST["pwd"])) {
    // var_dump($_POST);
    if ($_POST["user"] == $adminUser && $_POST["pwd"] == $adminPwd) {
        // echo "CORRECT";
        // Sempre que trabalhar com sessões começar com: 
        session_start();
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pwd"] = $_POST["pwd"];

        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php?msg=errorLogin");
    }
}