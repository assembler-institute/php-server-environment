<?php
include "header.php";
session_start();

if(!isset($_SESSION['email'])){
   header('Location: index.php?error=privatezone'); 
}
?>

<section id="section-panel" class="container-fluid">
    <div class="row">
        <h1 class="col-md-6 col-xs-12"><?php echo 'Welcom back! <br><span>' . $_SESSION['email'] . '</span>';?></h1>
        <form id="close-sesion" action="index.php" method="post">
            <button type="submit" value="Clouse session" name="clouse">Clouse</button>
            <!-- <input type="submit" value="Clouse session" name="clouse"> -->
        </form>
    </div>
</section>


    
    
    <?php

    include "footer.php";
    ?>



