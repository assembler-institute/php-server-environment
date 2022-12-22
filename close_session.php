<?php
  // close_session.php
  session_start();
  session_destroy();
  header("Location: index.php");
  exit;
?>
