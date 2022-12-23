<?php

$user= "Ynohe";
$password= "Ynohe27";
session_start();


if($user===$_POST["user"] && $password===$_POST["password"]){
    
    $_SESSION["user"] = $user;
    echo "<script>location.href='panel.php'</script>";
}else{
    header("Location: index.php?error= Did you forget your password?");

    echo "<script>location.href='index.php'</script>";
}

?>