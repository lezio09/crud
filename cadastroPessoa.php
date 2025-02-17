<?php
include 'db_connect.php';
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $stmt = $conn->prepare("INSERT INTO users (nome, usuario, senha, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $usuario, $senha, $email);
    $stmt->execute();
    echo "Usuário cadastrado com sucesso!";
}
?>