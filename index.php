<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $privateError = "private";
    $noLog = "nolog";    
    if (isset($_GET["error"]) && $_GET["error"] == $privateError) {
        echo "Esto es una zona privada logeate para poder pasar";
    } else if (isset($_GET["error"]) && $_GET["error"] == $noLog) {
        echo "Rellena correctamente los parametros";
    }
    ?>
    <form action="procesador.php" method=POST>
        <label for="name">Nombre:</label>
        <input id="name" type="text" name="names">
        <br>
        <label for="password">Contraseña:</label>
        <input id="password" type="password" name="passwords">
        <br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>