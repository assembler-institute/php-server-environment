<?php
session_start();
if(!isset($_SESSION["user"]))header("Location: index.php?zona-privada");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
</style>
    <link rel="stylesheet" href="stylesheet1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="todo">
        <div class="sidebar">
            <div div="div-real-betis">
                <img class="logo-betis" src="assets/betis.png" alt="real-betis">
                <h2 class="nombre-equipo">Real Betis</h2>
            </div>
            <div class="inicio">
                <img class="img-sidebar" src="assets/inicio.png" alt="inicio">
                <p class="texto-sidebar">Inicio</p>
            </div>
            <div class="inicio">
                <img class="img-sidebar" src="assets/estadisticas.png" alt="estadisticas">
                <p class="texto-sidebar">Estadísticas</p>
            </div>
            <div class="inicio">
                <img class="img-sidebar" src="assets/perfil.png" alt="perfil">
                <p class="texto-sidebar">Perfil</p>
            </div>
        </div>
        <div class="right-part">
            <div class="top-right-part">
                <img class="img-notification" src="assets/notification.png" alt="notificacion">
                <img class="img-victor"src="assets/victor.jpeg" alt="victor">
                <form action="close-session.php" method="POST">
                    <button class='sign-out'type="input" name="sign-out">Sign out</button>
                </form>
               
            </div>
            <div class="bottom-right-part">
                <div class="box-nothing">
                    <h1>Todavía no tienes información</h1>
                    <h2>¿Te gustaría realizar tus primeros pasos?</h2>
                    <button type="input">Empezar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

