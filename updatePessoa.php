<?php
include_once("bd.php");
include_once("pessoaController");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <h1>Alterar Usuario</h1>
    <form action="pessoaController.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="altere seu usuário">
        <br></br>
        <label>Senha</label>
        <input type="text" name="senha" id="senha" placeholder="altere sua senha">
        <input type="submit" value="Salvar alterações" name="UpdUsuario">

    
</body>
</html>