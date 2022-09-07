<?php
// First page to be shown
session_start();

if(isset($_SESSION['user'])){
    header('Location: panel.php');
}
else{
    header('Location: validate.php');
}

?>