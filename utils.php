<?php
session_start();

class Utils
{
  private static $JSON_FILE = "./storage/users.json";
  private static $SESSION_LIFETIME = 10;

  public static function getUsersFromJSONFile()
  {
    $usersJSON = file_get_contents(Utils::$JSON_FILE);
    $arrayUsers = json_decode($usersJSON, true);
    $users = [];
    foreach ($arrayUsers as $user) {
      $users[$user[0]] = $user[1];
    }
    return $users;
  }

  public static function checkUser($username, $password)
  {
    $mysqli = new mysqli("localhost", "root", "password", "php-login");
    $mysqli->set_charset("utf8");
    $response = $mysqli->query("SELECT * FROM users WHERE username='$username' AND pass='$password'");
    while ($row = mysqli_fetch_assoc($response)) {
      if (($row['username'] == $username) && ($row['pass'] == $password)) {
        return true;
      } else return false;
    }
  }

  public static function checkCookieExpiration()
  {
    if (($_SESSION['lastActivity'] + Utils::$SESSION_LIFETIME) < time()) {
      Utils::destroySession("login.php?expire=true");
    } else {
      $_SESSION['lastActivity'] = time();
    }
  }

  public static function destroySession($path)
  {

    session_destroy();
    unset($_SESSION);
    header("Location: $path");
    exit;
  }
}
