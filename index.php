<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <form action="validate.php" method="POST" class="formulario">
            <label for="username" class="username-label">
                Username:
                <input type="text" name="username" id="username">
            </label>
            <label for="password" class="password-label">
                Password:

                <input type="password" name="password" id="password">
            </label>
            <input type="submit" name="finalizar" id="submit">
            <div class="errores">
                <p>
                    <?php
                    session_start();
                    if (isset($_SESSION['errorVacio'])) {
                        echo $_SESSION['errorVacio'];
                    }
                    if (isset($_SESSION['errorSession'])) {
                        echo $_SESSION['errorSession'];
                    }
                    session_destroy();
                    ?>
                </p>
            </div>

        </form>
    </div>

</body>

</html>