<?php
session_start();
if (!isset($_SESSION["email"]))
header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment | Joe Alt</title>
</head>

<body>
    <h1>Ladies and Gentlemen, we got Him</h1>
</body>

</html>