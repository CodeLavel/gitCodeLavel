
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h2>Register</h2>
    </div>

    <form method="post" action="">
 
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="Email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="innput-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
    </form>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</body>
</html>