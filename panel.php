<?php
    session_start();
    if(!isset($_SESSION["username"]))header("Location: index.php?errorTwo=This is a private area.You need validated access.")
?>
<!DOCTYPE html>
<html lang="en" class="gradients">
    <head>
        <script src="app.js" defer></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logged</title>
    </head>
    <div id="gradientParentTwo" class="gradients">
        <body id="bodyPanel">
            <h1>GENERATE YOUR GRADIENT</h1>
            <a href="close_session.php">
                <button>Unlog</button>
            </a>
        </body>
    </div>
</html>