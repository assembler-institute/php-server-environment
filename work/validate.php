<?php
/* INICIO DE SESIÓN */
session_start();

/* ESTABLECEMOS VARIABLES CON USUARIO Y PASS */

$myUser ="balaguer.dev@gmail.com";
$myPass ="Balaguer92";

if($_POST['user'] == $myUser && $_POST['password'] == $myPass){
    $_SESSION['user'] = $_POST['user'];
    header("Location: panel.php");
}else{
    echo'<script type="text/javascript">;
        alert("Usuario o contraseña incorrectos");
        window.location.href="index.html";
        </script>';
}



?>