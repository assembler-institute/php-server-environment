<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];



$user = "wilson";
$pass = "españita";

if($username == "" || $password == ""){
    $_SESSION["errorVacio"] = "<b>Error:</b>  Tienes que rellenar el formulario";
    header("Location: index.php");
}
if(($username != $user && $username!="") || ($password != $pass && $password!="")){
    $_SESSION["errorSession"] = "<b>Error:</b> El Username o el Password son incorrecto, por favor vuelve a intentarlo";
    header("Location: index.php");
}

if ($username == $user && $password == $pass) {
    $_SESSION['username']=$user;
    $_SESSION['password']=$pass;
    header("Location: panel.php");
    
}
