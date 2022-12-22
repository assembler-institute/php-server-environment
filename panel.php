<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cyberpunk.css">
    <script src="java.js" defer></script>
    <title>CYBERPUNK</title>
</head>
<body>
    <div class="scanline"></div>
    <pre class="code"><span class="blink">█</span></pre>
    <section>
        <div class="hero-container">
          <div class="environment"></div>
          <a href='close_session.php' class="hero glitch layers" data-text="ログアウト"><span>ログアウト</span></a>
        </div>
      </section>
    
</body>
</html>



<?php

session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
  // Mostrar bienvenida y botón para cerrar sesión

  session_destroy();
} else {
  // Mostrar mensaje de error
  header("Location: error.html" );
}



?>