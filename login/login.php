<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <div class="wrapper">
        <form action="/admsis/login/logar.php" method="POST">
            <h1>Email</h1>
            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="email" autocomplete="off" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" id="senha" placeholder="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
                <label><input name="lembrar" id="lembrar" type="checkbox">Remember me</label>
            </div>

            <input type="submit" class="btn" name="submit" value="submit">
        </form>
    </div>    
</body>

</html>