<?php

#Analysis of the local PHP server variable $_SESSION

session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['TIME'] = time();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';




?>