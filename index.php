<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

session_start();


if (isset($_SESSION['logged-in'])) {
 header('Location: panel.php');
 exit();
    }
?>

<div class="registration">
    <form  class="form" action='validate.php' method='POST'>
        <label class="label"for="Name">Username</label><br>
        <input type='text' name='user' required> <br>
        <label class="label"for="Name">Password</label> <br>
        <input type='pssword' name='password' required> <br>
        <button type='submit' class="btn">Log in</button>
    </form>   
</div>
</body>
</html>