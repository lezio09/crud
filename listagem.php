<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
</head>
<body>
    <?php
    include_once("bd.php");
    include_once("pessoaDAO.php");
    $listaPessoa = getUsuarios();
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
        </tr>
        <?php foreach ($listaPessoa as $pessoa): ?>
            <tr>
                <td><?php echo htmlspecialchars($pessoa["id"]); ?></td>
                <td><?php echo htmlspecialchars($pessoa["nome"]); ?></td>
                <td><?php echo htmlspecialchars($pessoa["senha"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
