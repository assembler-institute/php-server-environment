<?php
session_start();
$username = "berta";
$password = "12345";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";



if($username===$_REQUEST["user"] && $password===$_REQUEST["password"]){
    $_SESSION["user"] = $username;
    header("Location: panel.php");
}else {
    header("Location: index.php?error=incorrectUser");
    echo "You're not logged";
}


?>

