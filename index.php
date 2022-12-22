<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Php Form</title>
</head>

<body class="body">
    <div class="container">

        <h1>Log in</h1>


        <form id="regiration_form" action="validate.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password">
                </div>
                <p>
                    <?php

        if (isset($_GET["error"])) {
            if ($_GET["error"] === "error") {
                echo "Your username or pass is wrong.";
            } else if ($_GET["error"] === "userempty") {
                echo "Your username is empty.";
            } else if ($_GET["error"] === "passempty") {
                echo "Your pass is empty.";
            }
            ;
        }

        ?>
                </p>
                <br>
                <input type="submit" class="next btn btn-info" value="Sing In" />
            </fieldset>
        </form>
    </div>
</body>

</html>