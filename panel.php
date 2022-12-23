<?php
include "header.php";
session_start();
if(!isset($_SESSION["userEmail"])){
    header("Location: index.php?error2=Private Zone");
}

$userEmail = $_SESSION["userEmail"];


?>
<div class="container-fluid text-center d-flex justify-content-center align-items-center">
    <div class="text-white col-md-2 rounded-bottom bg-dark">
        <h3 class="">User Panel</h3>
    </div>
</div>
<section class="container-fluid row align-items-center justify-content-center text-center vh-100" >
        
    <div class="col-md-3 bg-dark p-5 rounded" id="logout-box">
        <h3>
            <?= "<h3> Hello $userEmail, you are logged! </h1>" ?>
        </h3>
        <form action="close_session.php" method="POST" class="mt-5">
            <button type="submit" class="btn" id="logout-button" name="logout">Logout</button>
        </form>
    </div>
</section>
    
<?php
    include("footer.php")
?>
