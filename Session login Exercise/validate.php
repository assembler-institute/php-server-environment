<?php

    session_start();

    print_r($_POST);


    $name = "monica";
    $password = "1234";



    if($_POST['name'] == $name && $_POST['password'] == $password){
        $_SESSION['user'] = $_POST['name'];
        header("Location: panel.php");
    }else{
        header("Location: index.php");
        echo "error";
    }   
    







?>