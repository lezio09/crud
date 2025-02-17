<?php
include 'db_connect.php';
if (isset($_POST['remover'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Usuário removido!";
    } else {
        echo "Erro ao remover.";
    }
}
?>