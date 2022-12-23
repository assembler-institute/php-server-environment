<?php
include "header.php";
session_start();

if(isset ($_GET['error'])){
    echo '<p class="warning">El usuario o contraseña no son correctos</p>';
}
if(isset($_SESSION['email'])) {
    echo '<p class="greeting">Do you want to log in again ' . $_SESSION['email'] . '?</p>';
    unset($_SESSION['email']);
}

?>
    
<section id="section-login" class="container">
    <div class="row">
    <h2 id="tittle-login" class="col-md-12 col-sm-6 ">Complete the fields to log in</h2>
        <form id="form-login" action="validate.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email: admin@email.com</label><br>
                <input type="email" id="email" name="email" class="form-control" placeholder="email:">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: 1234</label><br>
                <input type="password" id="password" name="password" class="form-control" placeholder="pass:">
            </div>
            <button type="submit"  name="login">Submit</button>
            <br><br>
        </form>
    </div>
</section>

 <?php
 include "footer.php";
 ?>