<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edibles - Register</title>
    <link rel="stylesheet" href="webpage.css">
    <link rel="icon" type="image/icon" href="/Pics/favicon.ico">
</head>

<body>
    <header>
        <h2 class="logo"><a href="index.php">Edibles</a></h2>
        <nav class="navigation">
            <a href="index.php"><button class="bt">Login</button></a>
        </nav>
    </header>
    <div class="container">
        <h2>Register</h2>
        <form action="register_session.php" method="POST">
            <label class="input" for="username">Username</label>
            <input class="input" type="text" id="username" name="username" required>
            <label class="input" for="fullname">Full Name</label>
            <input class="input" type="text" id="fullname" name="fullname" required>
            <label class="input" for="email">E-mail</label>
            <input class="input" type="email" id="email" name="email" required>
            <label class="input" for="password">Password</label>
            <input class="input" type="password" id="password" name="password" required>
            
            <!-- Role selection always visible -->
            <label class="input" for="role">Role</label>
            <select class="input" id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            
            <button type="submit" class="register"><b>Register me</b></button>
        </form>
        <p>Already have an account? <a style="text-decoration: none;" href="index.php"><b>Login here</b></a></p>
    </div>
</body>
</html>

