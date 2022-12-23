
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET["private-zone"])){
            echo "<div class= 'div-private-zone'>
            <h2>Be careful, you are trying to enter to area 51</h2>
            <p>Try again soldier</p>
            </div>";
        }
    ?>

    <div class="registration-panel">
        <form class="form-registration" action="validate.php" method="POST">
        <label>Id
        <input type="text" name="id" placeholder="***********">
        </label>

        <br>
        <label>Password
        <input type="password" name="id-pass" placeholder="***********">
        </label>
     
        <br>
        
        <?php
        
        if(isset($_GET["error-area"])){
            echo "<div class= 'error-area'
            <h2>Be careful, your conection is wrong to enter to area 51</h2>
            <p>Try again sir</p>
            </div>";
        }
        ?>
        <button type="submit" class="log-in">Login</button>
        </form>
    </div>

</body>
</html>