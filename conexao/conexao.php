<?php 
    $host = "localhost";
    $nome = "root";
    $senha = "";
    $banco = "pet";
    $conexao = mysqli_connect($host,$nome,$senha,$banco);

    if(mysqli_connect_errno()){
        die("Conexão falhou: ".mysqli_connect_errno());
    }
?>