<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once("./modules/sessioncontrol.php");
    checkSession();
    ?>
    <main class="panel-main">
        <header class="logout-form">
            <p class="subtitle"> Hi, <?php echo $_SESSION['email'] ?> </p>
            <form action="./modules/logout.php">
                <button id="logout-btn">Logout</button>
            </form>
        </header>
        <h2 class="subtitle">Start a project</h2>
        <section class="projects-container">
            <div class="project">
                <p>+</p>
            </div>
            <div class="project">
                <p>+</p>
            </div>
            <div class="project">
                <p>+</p>
            </div>
        </section>
    </main>
</body>

</html>