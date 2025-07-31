<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listagem de Carros </h1>
    <a href="ClienteFormularioInserir.php">Adicionar novo Carro</a><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Ações</th>
        </tr>
        <?php
        include "conexao.php";
        $sql = "select * from tb_clientes";
        $resultado = mysqli_query($conexao, $sql);

        while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['id']}</td>";
    echo "<td> {$linha['marca']}</td>";
    echo "<td> {$linha['Modelo']}</td>";
    echo "<td> {$linha['Placa']}</td>";

    echo "<td>";
    echo "<a href='ClienteExcluir.php?idexcluir={$linha['id']}'> 
            <img src='https://cdn3.iconfinder.com/data/icons/font-awesome-regular-1/512/trash-can-256.png' alt='Excluir' width='20' height='20' /> 
          </a>";
    echo "</td>";
    echo "</tr>";
            
        }

        mysqli_close($conexao)
        ?>
    </table>

    
</body>
</html>