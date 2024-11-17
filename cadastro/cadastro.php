<?php
include('../connect.php');
session_start();
print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: /admsis/login/login.php");
}else {
    $logado = $_SESSION['email'];
}

$sql = "SELECT * from cadastro;";

$result = $conn -> query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
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
    <div class="wrapper">
        <form action="enviarcadastro.php" method="POST">
            <fieldset>
                <label for="">CNPJ:</label>
                <input type="text" name="cnpj" id="cnpj" required>
                <label for="">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br>
                <label for="">Ins Estadual:</label>
                <input type="text" name="ins_est" id="ins_est" required>
                <label for="">Ins Federal:</label>
                <input type="text" name="ins_fed" id="ins_fed" required>
                <br>
                <input value="Cadastrar" class="btn" type="submit">
            </fieldset>
                <br>
                <table>
                    <thead>
                        <tr>
                            <td>CNPJ</td>
                            <td>Nome</td>
                            <td>Ins Estadual</td>
                            <td>Ins Federal</td>
                            <td>Exclusão</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($result -> num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>";
                                    echo "<td>" . $row["cnpj"] . "</td>";
                                    echo "<td>" . $row["nome"] . "</td>";
                                    echo "<td>" . $row["ins_est"] . "</td>";
                                    echo "<td>" . $row["ins_fed"] . "</td>";
                                    echo "<td>
                                    <a class='btn btn-sm btn-danger ' href='deletecadastro.php?cnpj=$row[cnpj]' >
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                        </svg>
                                    
                                    </td>";
                                    echo "</tr>";
                                }
                            }else {
                                echo "<tr><td colspan='5'>Nenhum dado encontrado</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>

        </form>
    </div>
</body>
</html>