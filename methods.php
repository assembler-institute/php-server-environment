<?php
session_start();

function printUser()
{
  $email = $_SESSION['email'];
  echo "Hello " . $email . "!";
}

function rejectUnidentifiedUser()
{
  if (!isset($_SESSION['email'])) {
    $_SESSION['loginError'] = false;
    $_SESSION['userRejected'] = true;
    header('Location: index.php');
    exit();
  } else {
    $_SESSION['userRejected'] = false;
  }
}

function autoLogin()
{
  if (isset($_SESSION['email'])) {
    header('Location: panel.php');
  }
}

function setUser()
{
  $_email = 'assembler@as.com';
  $_password = 12345;

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (isset($_POST['email'])) {
    if ($email == $_email && $password == $_password) {
      $_SESSION['email'] = $email;
      echo $_SESSION['email'];
      header('Location: panel.php');
      $_SESSION['loginError'] = false;
      exit();
    } else {
      $_SESSION['loginError'] = true;
      $_SESSION['userRejected'] = false;
      header('Location: index.php');
    }
  } else {
    header('Location: index.php');
  }
}

function closeSession()
{
  // Remove cookies
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
      session_name(),
      '',
      time() - 42000,
      $params["path"],
      $params["domain"],
      $params["secure"],
      $params["httponly"]
    );
  }
  // Unset and redirect
  unset($_SESSION['email']);
  header('Location: index.php');
}
