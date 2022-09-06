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
    <h1>HOLAAAAAA</h1>
    <?php
if(isset($_SESSION["user"])){
    echo $_SESSION["user"];
}else{
    header("location: index.php");
}
    ?>
    <a href="./close_session.php">CIERRAAAAAAAAAAA</a>
</body>
</html>