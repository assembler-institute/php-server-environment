<?php

session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();

print_r($_SESSION);

?>