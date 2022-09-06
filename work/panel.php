<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel privado</title>
</head>

<body>
    <h1>Admin panel</h1>
    <?php
    if(isset($_SESSION['user'])){ 

    } else {
        header('Location: index.html');
    }
    ?>

    <a href="logout.php"><button>Log Out</button></a>


    
</body>
</html>