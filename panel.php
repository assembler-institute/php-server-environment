<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php
    if(isset($_SESSION["userName"])){
        echo $_SESSION["userName"];
    }else{
        header("Location: 01.index.php");
    };
 
    ?>
    
  
        <a href="close_session.php">Sign off</a>

   

      <!-- Main (Welcome y News)->

<!-Welcome section. Contenido: cabecera, separación y texto-->
<main>
  <div class="main-wrapper">
    <section class="welcome">
      <h2>Welcome Section</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pharetra himenaeos, massa ridiculus inceptos lobortis facilisis orci venenatis sem, habitasse urna tristique arcu senectus turpis sed accumsan. Scelerisque habitant urna facilisis gravida fermentum porttitor potenti cras, molestie vehicula maecenas vivamus faucibus vitae nascetur augue donec, congue et taciti vestibulum lacinia curabitur sagittis. Integer accumsan metus sociosqu iaculis eu eget semper enim lacinia, ut sociis dictum lectus cubilia montes malesuada platea ligula quam, egestas neque non vehicula sapien est luctus dignissim.</p>
      <p>Accumsan risus tellus felis ut vitae velit bibendum sapien lectus orci tristique, ligula vulputate quam imperdiet quisque placerat nulla tempus eleifend a. Enim libero suscipit tincidunt imperdiet nascetur urna molestie interdum porta sodales fermentum eget luctus, parturient quis nibh primis viverra at neque conubia platea senectus dis montes, duis maecenas pellentesque sapien inceptos potenti etiam semper fringilla velit phasellus fames. Dictumst purus tellus in nascetur urna nisi mollis ad eu felis, senectus quisque integer diam enim ligula per nibh ante sociis, vulputate penatibus phasellus sollicitudin ultricies lectus pharetra cras etiam.</p>
    </section>

<h2>Videos</h2>
<div class="videos" style="text-align:center;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/46qjDJ0lLdE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z5NoQg8LdDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/uT0Kgb16Ags" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/LdAHctXARlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




</body>
</html>