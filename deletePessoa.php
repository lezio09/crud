<?php
include_once("bd.php");
include_once("pessoaController.php");

$method = $_SERVER['REQUEST_METHOD'];
if ($method == "GET") {
    $id = $_GET['id'] ?? null;
    if ($id && deleteUser($id)) {
        header("Location: listagem.php");
        exit();
    } else {
        echo "Erro ao deletar o usuário";
    }
}
?>