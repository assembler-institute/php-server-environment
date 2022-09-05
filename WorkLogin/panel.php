<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo "inicio correcto";
    }else{ 
        
    };
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel privado</title>
    <h1>Inicio correcto</h1>


    <a href="logout.php"><button>Log Out</button></a>
</head>
<body>
    
</body>
</html>