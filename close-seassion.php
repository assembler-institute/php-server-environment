<?php
if(isset($_REQUEST["log-out"]) && $_SESSION["id"] == $Id){
    header("location: index.php");
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(),'', time(),
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
session_destroy();
}
?>
