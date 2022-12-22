<?php
    session_start();

    if(isset($_SESSION["username"]) && isset($_SESSION["user_password"])) {
        header("Location: panel.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <form class="form card" method="post" action="validate.php">
        <div class="card_header">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z" fill="currentColor"></path>
            </svg>
            <h1 class="form_heading">Sign in</h1>
        </div>
        <div class="field">
            <label for="username">Username</label>
            <input id="username" placeholder="Username" type="text" name="username" class="input">
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input id="password" placeholder="Password" type="password" name="user_password" class="input">
        </div>
        <div class="field">
            <button type="submit" class="button">Login</button>
        </div>
        </form>
    </main>
</body>
</html>