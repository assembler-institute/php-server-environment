<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_GET["zona-privada"])){
            echo "<div class='div-zona-privada'>
            <h1>¡Woo! Parece que has intentado entrar en un área restringida</h1>
            <p>Para acceder a este espacio debes introducir tus credenciales*</p>
            </div>";
        }
    ?>
    <div class="div-registration">
    
        <form class="form-registration" action="validate.php" method="POST">
            <label>Username</label><br>
            <input type="texto" name="user" placeholder="name@example.com" required><br>
            <label>Password</label><br>
            <input type="password" name="pass" placeholder="******" required><br>
            <?php
            
            if(isset($_GET["error"])){
            echo "<div class='error'> 
            <p>*¡Vaya! Parece que el usuario o la contraseña son incorrectos*</p>
        </div>";
    }
            
            ?>
            <button type="input">Sign in</button>
        </form>
    </div>
    
</body>
</html>