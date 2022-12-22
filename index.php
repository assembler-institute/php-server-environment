<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<!-- formulario de inicio de sesión -->
<form method="POST" action="validate.php">
    <label for="username">User Name:</label><br>
    <input type="text" id="username" name="username"><br>
    <br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <br>
    <button class="cybr-btn" type="submit" value="Iniciar sesión"> 
      ENTER<span aria-hidden>_</span>
      <span aria-hidden class="cybr-btn__glitch">ENTER_</span>
      <span aria-hidden class="cybr-btn__tag">R25</span>
    </button>
  
  </form>
  <?php
 if (isset($_SESSION['logged_in'])) {
  session_destroy();
  header('Location: index.php');
}
  
  ?>


</body>
</html>