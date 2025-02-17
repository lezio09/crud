<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>formulario</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="register.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Usuário: <input type="text" name="usuario" required><br>
        Senha: <input type="password" name="senha" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <h2>Login</h2>
    <form action="login.php" method="POST">
        Usuário: <input type="text" name="usuario" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit" name="login">Login</button>
    </form>

    <h2>Lista de Usuários</h2>
    <?php include 'list_users.php'; ?>
</body>
</html>
