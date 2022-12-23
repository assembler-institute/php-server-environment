<?php
session_start();
if (isset($_SESSION["email"]))
    header("location: panel.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/php-server-environment/php_server_environment/css/index.css">
    <script src="/php-server-environment/script.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>PHP Server Environment | Joe Alt</title>
</head>

<body>
    <div class="logInFlex">
        <article class="logInContainer">
            <div class="hide<?php
                            if (isset($_GET["succeed"]))
                                echo " show";
                            ?>">
                <span>Log Out succeeded!</span>
            </div>
            <h1>Log In</h1>
            <p>Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            <form action="validate.php" method="POST">
                <label><span class="logInLabel">Email Address:</span>
                    <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </label>
                <label><span class="logInLabel">User Password:</span>
                    <input type="password" name="pass" minlength="8" maxlength="20">
                </label>
                <input type="submit" value="Log In">
            </form>
            <div class="hide<?php
                            if (isset($_GET["err"]))
                                echo " show";
                            ?>">
                <span>Invalid email or password</span>
            </div>
        </article>
    </div>
    <div class="background-image">
        <img src="https://preview.colorlib.com/theme/bootstrap/signup-form-02/images/bg_1.jpg" alt="Background">
    </div>
</body>

</html>