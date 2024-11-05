<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edibles</title>
    <link rel="stylesheet" href="webpage.css">
    <link rel="icon" type="image/icon" href="/Pics/favicon.ico">
</head>
<body>
    <header>
        <h2 class="logo"><a href="index.php">Edibles</a></h2>
        <nav class="navigation">
            <a href="register.php"><button class="bt">Register</button></a>
        </nav>
    </header>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label class="input" for="username">Username</label>
            <input class="input" type="text" name="username" required>
            <label class="input" for="password">Password</label>
            <input class="input" type="password" name="password" required>
            <button type="submit" class="register"><b>Login</b></button>
            <p><input type="checkbox" name="check" id="checkbox"> Remember me</p>
            <p>Don't have an account? <a style="text-decoration-line: none;" href="register.php"><b>Register here</b></a></p>
        </form>
    </div>
</body>
</html>
