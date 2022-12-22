<?php

session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
  // Mostrar bienvenida y botón para cerrar sesión
  header("Location: test.html");
  session_destroy();
} else {
  // Mostrar mensaje de error
  header("Location: error.html" );
}

if (!isset($_SESSION['logged_in'])) {
    header('Location: error.html');
    exit;
  }

?>