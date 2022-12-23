<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
	<div class="container">
        <img src="assets/assembler.png" width="200px">
	</div>
</nav>
    <?php
        if(isset($_GET["error"]))echo $_GET["error"];
    ?>

<form action="validate.php" method="POST"  class="form border">
<div class="form-div" id="userNameGroup">
    <label class="form-label" for="username">Username</label>
    <div class="form-input-div">
        <input class="form-input" type="text" id="username" name="user" minlength="5" maxlength="20" required>
        <i class="form-validation-state fa-solid fa-circle-xmark"></i>
    </div>
    
    </div>
    
    <div class="form-div" id="passGroup">
    <label class="form-label" for="password">Password</label>
    <div class="form-input-div">
        <input class="form-input" type="password" id="pass1" name="password" maxlength="20"  required>
        <i class="form-validation-state fa-solid fa-circle-xmark"></i>
    </div>

<br>
<button class="button" type="submit" value="login" >
    Login
    <div class="button__horizontal"></div>
    <div class="button__vertical"></div>
</button>

</form>
<script src='./colors.js'></script>
</body>
</html>