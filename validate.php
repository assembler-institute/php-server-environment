<?php
session_start();

$email = 'admin@email.com';
$pass = '1234';

$emaildb = $_POST['email'];
$passdb = $_POST['password'];

if($emaildb === $email && $passdb === $pass){
    session_start();
    $_SESSION['email'] = $emaildb;
    header('Location: panel.php');
}else{
    header('Location: index.php?error=incorrectuser');
}

?>