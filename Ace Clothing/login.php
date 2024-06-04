<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<div class="loginform">
    <h1>Login Form</h1>
    <form action="login_database.php" method="post">
        <div class="txt-input">
            <label for="email">Username/Email</label><br>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        </div>
        <div class="txt-input">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>">
        </div>
        <input class="btn" type="submit" value="Login">
        <div class="pass">
            <p>Forgot password?</p>
        </div>
    </form>
    <div class="sign">
        <input type="checkbox"><span>Don't have an account?</span><a href="Registration.html">Sign Up</a>
    </div>
</div>

</body>
</html>
