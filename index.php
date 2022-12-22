  <?php
  require_once('methods.php');
  autoLogin();
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Environment</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
  </head>

  <body>
    <div class="form">
      <div class="form-div">

        <div class="login-info">
          <p>Email: assembler@as.com</p>
          <p>Password: 12345</p>
        </div>

        <form action="validate.php" method="POST">
          <label for="email" class="form-label text-light">Email</label>
          <input type="email" id="email" name="email" placeholder="assembler@as.com" class="form-control" required>
          <br>
          <br>
          <label for="password" class="form-label text-light">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>

          <?= ($_SESSION['loginError']) ? "<div class='alert alert-danger mt-4 role='alert'>User or password not valid</div>" : "" ?>
          <?= ($_SESSION['userRejected']) ? "<div class='alert alert-danger mt-4 role='alert'>This is a private section</div>" : "" ?>
          <input type="submit" value="Login" class="btn btn-dark mt-4 mb-3 w-100">
        </form>
      </div>
    </div>

  </body>

  </html>