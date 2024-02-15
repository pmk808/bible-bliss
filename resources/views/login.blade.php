<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css-files/style.css">
</head>
<body>
    <div class="login-form">
            <form action="login" class="form" method="POST">
            <img src="/css-files/images/avatar.png" alt="Avatar Profile">
            <h2>Login to your Account</h2>
            @csrf
            <div class="input-group">
                <input type="text" name="username" id="loginUser" maxlength="25" required>
                <label for="loginUser">User Name</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="loginPassword" maxlength="10" required>
                <label for="loginPassword">Password</label>
            </div>
            <input type="submit" value="Login" class="submit-btn">
        </form>
    </div>
</body>
</html>