<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/5fe3336987.js" crossorigin="anonymous" defer></script>


</head>
<body>
    <div class="container">
        <h1 class="title">Register Form</h1>
        <hr class="border">
        
        <!-- Execute code in same page -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form" name="login">

        <div class="form-group">
            <i class="icon left fa-solid fa-user"></i><input type="text" name="user" class="user" placeholder="User Name">
        </div>

        <div class="form-group">
            <i class="icon left fa-solid fa-lock"></i><input type="password" name="password" class="password" placeholder="Password">
        </div>

        <div class="form-group">
            <i class="icon left fa-solid fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Confirm Password">
            <!-- <i class="submit-btn fa-solid fa-arrow-right" onclick="login.submit()"></i> -->
            <i class="submit-btn fa-solid fa-arrow-right" onclick="login.submit()"></i>
        </div>

        <!-- Show validated result in same site show that the user knows he is doing well or not -->
        <?php if(!empty($errorss)):  ?>

            <div class="error">
                <ul>
                    <?php echo $errorss; ?>
                </ul>
            </div>

        <?php endif; ?>
        
        </form>
    </div>
</body>
</html>