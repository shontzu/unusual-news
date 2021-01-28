<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>

<body>
    <div>
        <h2>Register</h2>
    </div>

    <form method="Post" action="register.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="text" name="password2">
        </div>
        <div class="input-group">
            <button type="submit" name="register">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
</body>

</html>