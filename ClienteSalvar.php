<?php
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    
 
    $sql = "insert into tb_clientes(marca, Modelo, Placa) values
    ('$marca', '$modelo', '$placa')";
 
    include 'conexao.php';
 
    $resultado = mysqli_query($conexao, $sql);
 
    mysqli_close($conexao);
 
    header('Location:ClienteListar.php');
?>