<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>
    <title>Welcome</title>
</head>

<body class="text-center">
    
    <main class="form-signin m-5">

    <form method="post" action="./validate.php" class="abs-center w-50 m-auto p-3 mb-2 bg-info text-dark bg-opacity-25">
    <img src="image/yourpage.png" class="rounded-circle" width="100" alt="logo_your_page">
    <br><br>
    <h3>To continue, sign in to YourPage</h3>
<br>
    <div class="mb-3 row justify-content-center">
    <label for="username" class="col-sm-2 col-form-label">Username:</label>
    <div class="col-sm-4">
      <input type="text" name="user" class="form-control" id="username"> 
    </div>
  </div>
<br>

  <div class="mb-3 row justify-content-center">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-4">
      <input type="password" name="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <br>

<?php 
if (isset($_GET["msg"]) && $_GET["msg"] === "errorLogin") { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    Username o password is not correct! Please, try again!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>


<input class="w-30 btn btn-md btn-info" type="submit" value="Login">

</form>

</main>

</body>
</html>