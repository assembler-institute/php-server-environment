<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<?php

    if(isset($_GET["error"])) echo "<b>You must log in!</b>";
    if(isset($_GET["logout"])) echo "<b>You are log out!</b>";

?>

<body class="text-center">
    <main class="form-signin m-auto">
        <form action = "validate.php" method="POST">
            <div class="m-3">
                <label for="user" class="form-label">Name</label>
                <input name= "user" type="text" class="form-control" required>
            <div class="form-text">Write your username</div>
            </div>
            <div class="m-3">
                <label for="password" class="form-label">Password</label>
                <input name= "password" type="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </main>
</body>
</html>