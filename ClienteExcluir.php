<?php
$idexcluir = $_GET['idexcluir'];

include "conexao.php";

$sql = "delete from tb_clientes where id=$idexcluir";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("Location:ClienteListar.php");

?>