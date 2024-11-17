<?php
session_start();
print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: /admsis/login/login.php");
}else {
    $logado = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="/admsis/home/logo.jpg" alt="">
                    <span class="nav-item">Fulano</span>
                </a>
            </li>
            <li><a href="/admsis/cadastro/cadastro.php">
                <i class="fas fa-home"></i>
                <span class="nav-item">Cadastro</span>
            </a></li>
            <li><a href="">
                <i class="fas fa-user"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="logout.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
            </a></li>
            
        </ul>
    </nav>
</body>
</html>