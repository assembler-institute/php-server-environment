<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php
   // $email = $_POST['email'];
   // $name = $_POST['user'];
   // $password = $_POST['password'];    
   
   // if(isset($_POST['submit'])) {
   //   // Check if email has been entered and is valid
   //   if(empty($_POST['email'])) {
   //     $errEmail = 'Please enter a valid email address';
   //   }
   //   // check if a password has been entered and if it is a valid password
   //   else if(empty($_POST['password']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
   //     $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
   //   } else {
   //     echo "The form has been submitted";
   //   }
   // }
   ?>
  <div class="container-md align-content-center">

    <h1>Log In</h1>

    
      <?php 
        if (isset($_GET["logout"])){
          if($_GET["logout"] === "success"){
            echo "<div class='alert alert-primary' role='alert'>Logged out successfully.</div>";
          }
        }
      ?>
    
      <?php
        if(isset($_GET["error"])){
          switch ($_GET["error"]){
          case "incorrect":
            echo "<div class='alert alert-primary' role='alert'>Your Email or Password are incorrect.</div>";
            break;
          case "userempty":
            echo "<div class='alert alert-primary' role='alert'>Your Email is empty.</div>";
            break;
          case "passempty":
            echo "<div class='alert alert-primary' role='alert'>Your Password is empty.</div>";
            break;
          case "bothempty":
            echo "<div class='alert alert-primary' role='alert'>Both inputs are empty.</div>";
            break;
          }
        }
      ?>
      
    <form role="form" method="post" action="validate.php">
      <div class="form-floating mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="name@example.com">
      </div>

      <div class="form-floating mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
      </div>

      <div class="form-group row">
        <input type="submit" value="Sign in" name="submit" class="btn btn-primary" />
      </div>
    </form>
  </div>
</body>

</html>