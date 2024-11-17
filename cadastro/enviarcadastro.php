<?php
    include("../connect.php");

    if(isset($_POST['cnpj']) && isset($_POST['nome']) && isset($_POST['ins_est']) && isset($_POST['ins_fed'])){
        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $ins_est = $_POST['ins_est'];
        $ins_fed = $_POST['ins_fed'];

        header("Location: /admsis/cadastro/cadastro.php");
    }


    $sql = "INSERT INTO cadastro(cnpj, nome, ins_est, ins_fed) VALUES('$cnpj', '$nome', '$ins_est', '$ins_fed');";

    $result = $conn->query($sql);
?>