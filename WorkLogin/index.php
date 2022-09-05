<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <h1>Log In</h1>
    <form action="validate.php" method="POST">
        <label for="usuario">
            Usuario:
            <input type="email" name="user">
        </label><br>
        <label>
            Contraseña:
            <input type="password" name="password">
        </label>
        <br><br>
        <button type="submit">Log in</button>

    </form>
    
</body>
</html>