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
    include_once("db.php");
    include_once("pessoa_da.php");

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
                <td><?php echo $listaPessoa[$i]["idusuario"] ?></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["senha"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>