<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueado</title>
    <link href="principalStyle.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>
</head>

<body>

    <div class="menu">
        <img src="Assets/logo.png">
        <div class="account">Account</div>
            
    </div>
    <div class="menu-account">
                <?php
            session_start();
            if(!isset($_SESSION['username'])){
                header("Location: index.php");
            }
            echo "<p><b>Username:</b> ". $_SESSION['username']."</p>";
            echo "<p><b>Password:</b> ".$_SESSION['password']."</p>";
                ?>
            <p class="unlogin"><b>Unlogin</b></p>
    </div>


    <session class="container">
        <h1>Find Your City</h1>
        <div class="content">
            <input type="text" placeholder="What are you search?">
            <input type="text" placeholder="location">
            <select name="categories">
            <option >All Categories</option>
            </select>
            <button type="button">Search</button>
        </div>
        
    </session>
</body>

</html>