<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO integrantes(nome,idade,email,senha) values ('$nome','$idade','$email','$senha')";

    if(mysqli_query($conexao, $sql)){
        echo ("<h1>Cadastro realizado com sucesso </h1>");
    }
    else{
        echo("Erro:".$sql."<br>".mysqli_error($conexao));
    }
    
?>