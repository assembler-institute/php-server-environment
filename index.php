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
        if(isset($_GET["error"]))echo $_GET["error"];
        ?>
        <!-- Mejorar Error -->
    <form action="validate.php" method="POST">
        <label>
            Username
            <input type="text" name="username">
        </label>
        <br>
        <label>
            Password
            <input type="password" name="password">
        </label>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>