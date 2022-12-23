<?php
session_start();
$username= 'lucy';
$password= '123456';

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

if($username===$_REQUEST['user'] && $password===$_REQUEST['password']){
    $_SESSION['user'] = $username;
    header('Location: panel.php');
}else {
    header('Location: index.php');
    echo 'You are not logged';
}

?>