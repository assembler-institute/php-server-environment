<?php
session_start();
if (!isset($_SESSION["email"]))
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
    <?php
session_unset();
session_destroy();
header("location: index.php?succeed=logout");
    ?>
</body>

</html>