<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment | Joe Alt</title>
</head>

<body>
    <div style="display:flex; align-items:center; justify-content:center; background-color:beige; width:600px; height:600px;">
        <form action="validate.php" method="POST">
            <label>Email:
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </label>
            <label>Password:
                <input type="password" name="pass" minlength="8" maxlength="20">
            </label>
            <input type="submit" value="Log In">
        </form>
    </div>
</body>

</html>