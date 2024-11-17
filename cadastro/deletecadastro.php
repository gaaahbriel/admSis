<?php
    if(!empty($_GET['cnpj'])){
        include("../connect.php");

        $cnpj = $_GET['cnpj'];

        $sql = "SELECT * FROM cadastro WHERE cnpj = '$cnpj';";

        $result = $conn -> query($sql);

        if($result -> num_rows > 0){
            $sqlDelete = "DELETE FROM cadastro WHERE cnpj = '$cnpj';";
            $resultDeLete = $conn -> query($sqlDelete);
        }
    } 

    header("Location: /admsis/cadastro/cadastro.php");
?>