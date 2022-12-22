<?php
    $usrdb = 'kristian';
    $paswd = '12345';

    if ($usrdb === $_REQUEST['username'] && $paswd === $_REQUEST['password']) {
        session_start();
        $_SESSION["username"]=$_REQUEST["username"];
        header("Location: panel.php");
    }else{
        header("Location: index.php?error=incorrectuser");
    }






?>