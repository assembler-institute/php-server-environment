<?php
session_start();

session_destroy();

unset($_COOKIE['sessionId']); 
setcookie('sessionId', null, time()-3600, '/'); 

header('location:./../index.php');