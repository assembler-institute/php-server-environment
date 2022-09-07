<?php
// Comparing if there is already an account opened (validation for later use)
session_start();
if(isset($_SESSION['user'])){
header('Location: index.php');
}

// Validating data introduced 
// If the sending method is 'post'
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = trim(strtolower($_POST['user']));
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);

    // Letting the user to know what he is doing wrong 
    $errorss = '';  
    if(empty($user) or empty($password) or empty($password2)){
        $errorss .= '<li>Please, fill in all data correctly</>';
    } else{
        // Compare if the user has already loggedIn or not
        header('Location: panel.php');
    }

}

require 'register-infophp/view_register.php';

?>
