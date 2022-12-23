<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Variables php</title>
</head>

<body>
    <a href="http://127.0.0.1/php-server-environment" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>Server Variables php</h1>

    <?php

    echo '<pre>', print_r($_SERVER), '</pre>';

    ?>

    <p> "index.php" : this will be the login page with user and password fields and a login button. This fields must be in a form pointing its action to the validation script. In case you log in or are already logged in, you must be automatically redirected to the panel.
 "validate.php": All login validations must be done in this file receiving the form data by the POST method and this should redirect the user depending on whether the login is correct or not. You can use a simple string comparison or anything you want for deciding if the login is correct or not.
 "panel.php": this file should indicate on the screen whether the user who is trying to access is logged in or not, in case the user is logged, it must also contain a button to log out, destroy the current session and then redirect you to the "index.php" file. If not logged you must alert the user that this is a private section.
 "close_session.php": This is the last file which will be responsible for destroying the session and redirecting to the login page.
</p>

</body>

</html>