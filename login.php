<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>

<body>
    <div>
        <h2>Sign In</h2>
    </div>

    <form method="Post" action="login.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password1">
        </div>
        <div class="input-group">
            <button type="submit" name="login">Log in</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
    </form>
</body>

</html>