<?php
require './utils.php';

// When Session expires
if (isset($_SESSION['lastActivity'])) Utils::checkCookieExpiration();

// When you try to go back to user info after close session
if (!isset($_GET['error']) && !isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">
              <?php
              if (!isset($_GET['error'])) echo $_SESSION['username'];
              else echo "Error!"
              ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_GET['error'])) {
  ?>
    <div class="container-fluid d-flex flex-column align-items-center mt-5">
      <div class="alert alert-danger col-6" role="alert">
        <strong>The page you're trying to accces is private.</strong> You need to be registered.
      </div>
      <span class="h2" id="seconds"></span>
    </div>
    <script type="text/javascript">
      // TIMER
      let i = 4;
      const timer = setInterval(() => {
        document.querySelector('span#seconds').textContent = `Serás redirigido en ${i}`;
        i--;
      }, 1000);

      setTimeout(() => {
        clearInterval(timer);
        window.location.replace('login.php');
      }, 5000);
    </script>
  <?php
  } else {
  ?>
    <div class="container-fluid text-center mt-5">
      <h3>Welcome to your profile page, <?php echo "<h1 class='mb-5'>", ucfirst($_SESSION['username']), "</h1>" ?></h3>
      <form action="./close.php" method="POST">
        <button type="submit" class="btn btn-danger btn-lg">Sign Out</button>
      </form>
    </div>
  <?php
  }
  ?>
</body>
</html>