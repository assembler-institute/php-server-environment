<?php
print_r($_POST);
session_start();

$myPassword='lunes';
$myUser='admin@hotmail.com';

if($_POST['username']==$myUser && $_POST["password"]==$myPassword){
    $_SESSION["username"]=$myUser;

  header("Location:panel.php");
 }else{
    header("Location:index.php");
   }


     ?>