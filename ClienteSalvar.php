<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = md5($senha);
 
    $sql = "insert into tb_clientes(nome, email, senha) values
    ('$nome', '$email', '$hash')";
 
    include 'conexao.php';
 
    $resultado = mysqli_query($conexao, $sql);
 
    mysqli_close($conexao);
 
    header('Location:ClienteListar.php');
?>