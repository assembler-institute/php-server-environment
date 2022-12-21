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
    <section class="container">
        <form action="validate.php" method="POST" class="formulario">
            <label for="username" class="username-label">
                Username:
            <input type="text" name="username" id="username" required>
            </label>
            <label for="password" class="password-label">
                Password:
            
            <input type="text" name="password" id="password" required>
            </label>
            <input type="submit" name="finalizar" id="submit">

            <p>
                hola caracola
                <?php

                ?>
            </p>
        </form>
    </section>

</body>

</html>