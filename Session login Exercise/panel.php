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
    <h1>Panel</h1>

    <?php
        
        if (isset($_SESSION["user"])) { 
            echo "Welcome, " . $_SESSION["user"], "<br>";
        } else {
            header("Location: ./index.php");
            echo "Is a private section, you must log in";
        }
    ?>

    <button><a href="close_session.php">Log out</a></button> 
</body>

</html>