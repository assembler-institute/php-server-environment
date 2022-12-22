<?php

function loginUser()
{
    session_start();

    $emaildb = 'm@m.com';
    $passworddb = 'm';

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if ($email === $emaildb && $password === $passworddb) {
        $_SESSION['email'] = $email;
        header('Location: ../panel.php');
    } else {
        header('Location: ../index.php?error=notvalidlogin');
    }
}

function checkSession()
{
    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: index.php');
    }
}

function destroySession()
{
    session_start();

    unset($_SESSION["email"]);

    header('Location: ../index.php');
}

function checkUser()
{
    session_start();

    if (isset($_SESSION['email'])) {
        header("Location: panel.php");
    }
}

function checkLoginError()
{
    if (isset($_GET['error'])) {
        echo "<div class='error'>
        <p>INCORR3CT LOGIN</p>
        </div>";
    }
}
