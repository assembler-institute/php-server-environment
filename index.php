<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="initialPage">
    <form action="validate.php" method="post">
        <div class="login">
        <label for="userName">
            User name:
        <input type="text" name="userName" class="userName">
        </label>
        <label for="password">
            Password:
        <input type="password" name="password" class="password">
        </label>
<?php
if(isset($_GET["error"])){
    echo "<div class='invalid'>Invalid username or password</div>";
}
?>
        <button type="submit" class="btnSubmit">Enter the side</button>
        </div>
    </form>


</body>
</html>