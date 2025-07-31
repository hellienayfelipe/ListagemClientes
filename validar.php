<?php
$Modelo = $_POST['modelo'];
$placa = $_POST['placa'];
 
include "conexao.php";
$sql = "SELECT *FROM tb_usuarios where Modelo ='$placa'and placa='$placa'";
 
$resultado = mysqli_query($conexao, $sql);
 
if($resultado->num_rows > 0){
header("Location:admin.php");
}else{
    header("Location:login.php");
}
?>