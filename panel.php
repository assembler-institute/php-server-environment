<?php
session_start();
if(isset($_SESSION["user"])){
    echo "<h1>Welcome ".$_SESSION["user"]."</h1>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="profile" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Assembler</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/bb7f913e5c.js" crossorigin="anonymous"></script>
</head>

<body>
</a>
    <header id="navigation">
    <h1>Assembler</h1>
    </header>
    <div class="total">
    
    <div id='div1'>
        <article>
            <h2> Profile</h2>
            <p class="custom_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            <p class='custom_p'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img alt="logo" src="assets/assembler.png" width=500 />
            <p class="custom_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img  src="assets/assembler.png" width=500xp />
            <p class='custom_p'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </article>
    </div>
    </div>
    <footer>
        <p>Copyright © 2022 | By Ynohe</p>
        <div class="social">
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.discord.com"><i class="fa-brands fa-discord"></i></a>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </footer>
</body>

</html>
<?php

if(isset($_SESSION["user"])){
    echo "<br><a href='close_session.php'><input type=button class='logg' value=logout name=logout</a>";
};

?>