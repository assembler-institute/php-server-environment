<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();

    if (count($_SESSION)) {
        header("Location: panel.php");
    } else if (isset($_GET["error"])) {
        echo "<div class='error-invalid-user'><h3>Enter a valid email and password!</h3></div>";
    }

    ?>
    <div class="container-login">
        <div class="img-login"></div>
        <div class="container-form-login">
            <form class="form-login" action="validate.php" method="POST">

                <h2>Login</h2>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email">

                <label for="password">Pasword:</label>
                <input type="password" name="password" id="password">

                <button type="submit">Submit</button>

            </form>
        </div>
    </div>
</body>

</html>