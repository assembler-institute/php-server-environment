
<?php
if(isset($_REQUEST["sign-out"]) && $_SESSION["user"] == $user){
    session_start();
    header("location: index.php");
    session_destroy();
    
    // if (ini_get("session.use_cookies")) {
    //         $params = session_get_cookie_params();
    //         setcookie(session_name(), '', time(),
    //             $params["path"], $params["domain"],
    //             $params["secure"], $params["httponly"]
    //         );
    //     }
    
   
}

?>