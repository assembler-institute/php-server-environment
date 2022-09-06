<?php
session_start();
print_r($_POST);
echo "<br>";

#echo $_POST["user"] . "<br>";
#echo $_POST["pwd"] . "<br>";

$myUser = "juan@gmail.com";
$myPwd = "1234";

if ($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd) {
    $_SESSION["user"] = $_POST["user"];
    header("Location: panel.php");
}
else {
    header("Location: index.php");
}

?>