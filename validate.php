<?php
    $username = "hola";
    $password = 1;

    if($_REQUEST['username']==$username && $_REQUEST['password']==$password){
        session_start();
        $_SESSION['username'] = $_REQUEST['username'];
        header("Location:panel.php");
    }
    else if($_REQUEST['username']=="" && $_REQUEST['password']==""){
        header("Location:index.php?errorVoid=Fill in the username and password fields");
    } else {
        header("Location:index.php?errorInvalid=Invalid username and password fields");
    }
?>