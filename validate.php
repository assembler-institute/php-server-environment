<?php
    session_start();

    $username = "david";
    $password = "1234";

    $username2 = "luis";
    $password = "1234";

    $userInp = $_POST['username'];
    $passInp = $_POST['user_password'];

    if(($username === $userInp || $username2 === $userInp) && $password === $passInp) {
        session_start();
        $_SESSION["username"] = $userInp;
        $_SESSION["user_password"] = $passInp;
        header("Location: panel.php");
    } else {
        header("Location: index.php?error=incorrect_data");
    }
?>

