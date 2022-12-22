<?php
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["user_password"])) {
        header("location: index.php?error=private+zone");
    }

    $username = $_SESSION["username"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Private Space</h1>
        <p>Hello <?=$username?> this is your own personal space.</p>

        <section>
            <a href="close_session.php"><button type="button">log out</button></a>
            
        </section>
    </main>
</body>
</html>