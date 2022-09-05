<?php

if(!empty($_POST['user']) && !empty($_POST['password'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    if($user=="balaguer.dev@gmail.com" && $password =="47590165z"){
        echo "Sesión iniciada con éxito";
    }else{
        echo "Usuario o contraseña no válidos";
    }
} else {
    echo "Existen campos vacíos";
}

echo "<p> el usuario es $user </p>";
echo "<p> el password es $password </p>";
?>