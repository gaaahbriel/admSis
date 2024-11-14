<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'form';

    $conn = new mysqli($host, $user, $password, $database);

    /*if($conn){
        die("Desconectado! Erro: " . $conn->connect_error());
     }
    //echo "Conectado!";*/

?>