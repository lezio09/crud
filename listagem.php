<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem</title>
    <style>
        
    </style>
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
        <?php
        for($i=0; $i <count($listaPessoa); $i++){
            ?>
            <tr>
                <td><?php echo $listaPessoa[$i]["id"] ?></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["senha"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>