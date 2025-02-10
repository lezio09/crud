<?php

include_once("db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="pessoaController.php"  method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="informe seu usuario">
        <br></br>
        <label>Senha</label>
        <input type="text" name="senha" id="senha" placeholder="informe sua senha">
        <input type="submit" value="Entrar" name="logUsuario">


    </form>
</body>
</html>