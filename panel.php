
<?php
session_start();
if(!isset ($_SESSION["userName"])) {
    header("location: index.php?errorLogin");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="tori">
    <div class="logout">
    <a href="close_session.php"><button class="btnPanel">Logout</button></a> 
    </div>
    <div class="welcome">
    <h1>BIENVENIDO</h1>
    <p>Tómate 5 minutos para descansar</p>
    </div>
    <audio class ="control" controls autoplay loop>
    <source src="assets/5minRelaxMusic.mp3" type="audio/mp3">
    </audio>
</body>
</html>