<?php
/* iniciamos sesión  */
session_start();

/* establecemos usuario y contraseña */
$myUser ="balaguer.dev@gmail.com";
$myPassword ="47590165z";

    if($_POST['user'] == $myUser && $_POST['password'] == $myPassword){
        $_SESSION['user']== $_POST['user'];
        header("Location: panel.php");
    } else {
        echo'<script type="text/javascript">;
        alert("Usuario o contraseña incorrectos");
        window.location.href="index.php";
        </script>';
};
?>