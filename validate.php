<?php
require './utils.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$databaseSelected = $_REQUEST['database'];


if ($databaseSelected == "json") {
  $users = Utils::getUsersFromJSONFile();
  foreach ($users as $name => $pass) {
    if ($name == $username && $pass == $password) {
      initSession($username);
    }
  }

} else if ($databaseSelected == "mysql") {
  $valid = Utils::checkUser($username, $password);
  if ($valid) {
    initSession($username);
  }
}

header("Location: panel.php?error=true");
exit;


function initSession($name)
{
  $_SESSION['username'] = $name;
  $_SESSION['lastActivity'] = time();
  header("Location: panel.php");
  exit;
}
