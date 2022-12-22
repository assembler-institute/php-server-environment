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
if (isset($_GET["error"]))
    echo $_GET["error"];
?>
   <form action="validate.php" method="POST">
    <input type="text" name="user">
    <input type="password" name="password">
    <button type="submit">Log in</button>
</body>
</html>
