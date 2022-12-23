<?php
include "header.php";


function errorDataUser() {
    if (isset($_REQUEST["error1"])) {
        echo ("<p class='bg-danger text-center p-1'>Email or password incorrect</p>");
    }
}

function errorPrivateZone() {
    if (isset($_REQUEST["error2"])) {
        echo ("<p class='bg-danger text-center p-1'>Private zone, you need to login or register first.</p>");
    }
}

function backToSign(){
    if (isset($_REQUEST["sing-up"])){
        header("Location: index.php"); 
    }
}

backToSign();


?>
    <div class="container-fluid text-center d-flex justify-content-center align-items-center">
        <div class="text-white col-md-2 rounded-bottom bg-dark">
            <h3 class="">Log in page </h3>
        </div>
    </div>
    <section class="container-fluid row align-items-center justify-content-center vh-100">
        <div class="col-md-2 rounded">
            <div class="bg-dark rounded" id="login-box">
                <p class="text-white text-center p-3 mb-0">Login</p>
                <?php
                if(isset($_GET["error2"]))echo(errorPrivateZone());
                if(isset($_GET["error1"]))echo(errorDataUser());
                ?>
                <form action="validate.php" method="POST" class="row p-5 pt-0 pb-3" >
                    <input type="text" name="email" placeholder="Email" class="text-center rounded-3 border-0" required>
                    <input type="password" name="password" placeholder="Password" class="text-center rounded border-0 mt-2" required>
                    <button type="submit" class="btn rounded p-1 mt-3" id="login-button">Login</button>
                </form>
            </div>
        </div>
    </section>
<?php
    include("footer.php")
?>
