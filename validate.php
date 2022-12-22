<?php
session_start();

$emaildb = 'm@m.com';
$passworddb = 'm';

$email = $_REQUEST['email'];
$password = $_REQUEST['password']; 

if($email === $emaildb && $password = $passworddb){
    $_SESSION['email'] = $email;
    header('Location: panel.php');
} else {
    header('Location: index.php?error=notvalidlogin'); 
}
