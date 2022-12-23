<?php
session_start();
if (!isset($_SESSION["id"]))
    header("Location: index.php?private-zone");
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
    <h1>Welcome to area 51</h1>
    <br>
    <form action="close-seassion.php" method="GET">
    <button type="input" name="log-out" >Logout</button>

    </form>
</body>
</html>
