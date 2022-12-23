<?php
    session_start();
    if(isset($_SESSION["username"]))header("Location: panel.php");
    else{
        session_unset();
        session_destroy();
    }
    ?>
<!DOCTYPE html>
<html lang="en" class="gradients">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="app.js" defer></script>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <title>Log in</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>
    <div id="gradientParent" class="gradients">
        <body>
            <main>
                <svg id="semiCircleContainer" viewBox="0 0 900 370">
                    <path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                        <text width="500">
                            <textPath alignment-baseline="top" xlink:href="#curve">
                            <?php
                                if(isset($_REQUEST["errorInvalid"]))echo $_REQUEST["errorInvalid"];
                                if(isset($_REQUEST["errorTwo"]))echo $_REQUEST["errorTwo"];
                                if(isset($_REQUEST["errorVoid"]))echo $_REQUEST["errorVoid"];
                            ?>
                        </textPath>
                    </text>
                </svg>
                <form id="form" action="validate.php" method="POST">
                    <input id="usernameInput" type="text" name="username">
                    <label class="label" for="usernameInput">Introduce your username</label>
                    <input id="passwordInput" type="password" name="password">
                    <label class="label" for="passwordInput">Introduce your password</label>
                    <button id="buttonLogIn" type="submit">Log in</button>
                </form>
            </main>
        </body>
    </div>
</html>