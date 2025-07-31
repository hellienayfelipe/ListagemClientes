<?php

?>
 <link rel="stylesheet" href="style.css">
<h1>Cadastro</h1>
<form name="cadastro" method="post" action="ClienteSalvar.php">
    Marca: <input type="text" name="marca" required maxlength="200"><br>
    Modelo: <input type="text" name="modelo" required maxlength="200"><br>
    Placa: <input type="text" name="placa" required maxlength="200"><br>
    <button type="submit">Cadastrar Carro</button>
</form>