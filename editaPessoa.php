<?php
include 'db_connect.php';
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("UPDATE users SET nome=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $nome, $email, $id);
    if ($stmt->execute()) {
        echo "Usuário atualizado!";
    } else {
        echo "Erro ao atualizar.";
    }
}
?>