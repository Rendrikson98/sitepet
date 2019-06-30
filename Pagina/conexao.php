<?php 
    // Passo 1 - Abrir conexão 
    $host = "localhost";
    $nome = "root";
    $senha = "";
    $banco = "andes";
    $conexao = mysqli_connect($host,$nome,$senha,$banco); //abre a conexão

    // Passo 2 - Testa a conexão

    if (mysqli_connect_errno()){
        die("Conexão falhou: ".mysqli_connect_errno()); // Se tiver erro mate a conexão 
    }
?>
