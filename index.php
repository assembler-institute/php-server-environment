<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login demo</title>
</head>
<body>
    <form class="login-form" action="validate.php" method="post">
        <fieldset>
            <legend>Login:</legend>
            <div class="mb-3">
                <label class="form-label" for="user">Username:</label>
                <input class="form-control" id="user" name="user" type="text" placeholder="Your username...">
            </div>
            <div class="mb-3">
                <label class="form-label" for="pwd">Password:</label>
                <input class="form-control" id="pwd" name="pwd" type="password" placeholder="Your password...">
            </div>
            <input type="submit" class="btn btn-primary" value="Log in">
        </fieldset>
    </form>
</body>
</html>