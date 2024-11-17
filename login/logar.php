<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('../connect.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha';";

    $result = $conn->query($sql);



    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: ../login/login.php");
    }else{

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: ../home/home.php");
    }
} else 
{
   header('Location: /admsis/login/login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>