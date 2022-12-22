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

    if($_GET["error"])echo $_GET["error"];

?>

    <form action = "validate.php" method="POST">
        <label>
            Name:
        <input type="text" name="user">
        </label>

        <br>

        <label>
            Password:
            <input type="password" name="password">
        </label>

        <br>

        <button type="submit">Log in</button>







    </form>
</body>
</html>