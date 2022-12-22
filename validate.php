<?php
  // Comprobar si se han enviado datos del formulario
  if (isset($_POST['username']) && isset($_POST['password'])) {
    // Recoger y validar los datos del formulario
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    // Comprobar si el usuario y la contraseña son válidos
    if ($username == 'ADMIN' && $password == '123456') {
      // Iniciar sesión y redirigir al panel
      session_start();
      $_SESSION['logged_in'] = true;
      header("Location: panel.php");
      exit;
    } else {
      // Redirigir al index con un mensaje de error
      header("Location: index.php?error=invalid_credentials");
      exit;
    }
  } else {
    // Redirigir al index con un mensaje de error
    header("Location: index.php?error=missing_data");
    exit;
  }

?>