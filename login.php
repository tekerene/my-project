<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>lOg in</h2>
        </div>
        <form action="login.php" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>
            
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password_1">
            </div>
            
            <button type="submit" name="log_in">Log in</button>
            <p> Not a user?<a href="registration.php"><b>Register Here</b></a></p>
        </form>
    </div>
</body>
</html>