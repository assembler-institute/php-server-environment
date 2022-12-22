<?php
session_start();

if(isset($_SESSION['logged'])){
  header('location:./panel.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<form action="./resources/validation.php" method="post">
    <section class='container mt-5'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="psw" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <?php 
    if(isset($_GET['err'])){
      echo '<p style="color:red">'.$_GET['msg'].'</p>';
    }
    ?>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
</body>
</html>