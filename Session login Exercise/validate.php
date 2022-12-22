<?php

    session_start();

    print_r($_REQUEST);


    $name = "monica";
    $password = "1234";



    if($_REQUEST['user'] == $name && $_REQUEST['password'] == $password){
        $_SESSION['user'] = $_REQUEST['user'];
        header("Location: panel.php");
    }else{
        header("Location: index.php?error=incorrectuser");
    }   
    







?>