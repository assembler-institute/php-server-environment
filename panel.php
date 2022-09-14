<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>

<body>
    <h1>User Panel</h1>

    <?php
        #echo $_POST["user"]; // we can't access to the variables here.
        if (isset($_SESSION["user"])) { // if the session exists
            echo "Welcome, " . $_SESSION["user"], "<br>"; // we can access to the session variable from any file because it is stored in the PHP cookie of the browser we have used.
        } else {
            header("Location: ./index.php");
        }
    ?>

    <a href="./close_session.php">Log out</a> <!-- we could create a <form action=""... if we want to pass some data> -->
</body>

</html>