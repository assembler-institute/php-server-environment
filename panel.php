<?php
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["user_password"])) {
        header("location: index.php?error=private_zone");
    }

    $username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/panel.css">
    <script src="https://kit.fontawesome.com/8bbf7b9ae4.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Profile</h2>
    <a href="close_session.php"><button type="button">log out</button></a> 
    </header>
    <main>
        <section class="container">
            <div class="profile-box">
                <img class="profile-pic" src="./images/profile.jpg" width="200px" alt="profile img">
                <h3><?=$username?></h3>
                <p>Student at Assembler Institute</p>
                <div class="social-media">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-github"></i>
                </div>
                <button>Follow</button>
                <div class="profile-bottom">
                    <p>Learn more about me</p>
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
            </div>
        </section>
    </main>
</body>
</html>