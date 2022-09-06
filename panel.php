<?php
session_start();
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN PANEL</h1>
    <?php
     if(!isset($_SESSION['username'])){
        header('Location:index.php');
     }
       echo 'hola'.$_SESSION['username'];

    ?>
    <a href="./close_session.php">Cerrar sesion</a>
</body>
</html>