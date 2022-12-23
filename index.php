<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
</style>
</head>
<body>
    <?php
if (isset($_GET["error"]))
echo '<div class="alert alert-dismissible alert-warning">
<h4 class="alert-heading">Warning!</h4>
<p class="mb-0">You have not logged in<a href="#" class="alert-link"></a></p>
</div>';
?>
    
 <div>
<form action="validate.php" method="POST">
<label for="username">Username</label>
 <input type="text" name="user" required>
<label for="password">Password</label>
 <input type="password" name="password" required>
 <button type="submit" class="btn">Log in</button>
</div>

</body>
</html>
