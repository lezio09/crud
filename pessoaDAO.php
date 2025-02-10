<?php
include_once("bd.php");
include_once("pessoaController.php")

function save($nome, $senha) {
    $db = conecta();
    $sql = "INSERT INTO usuarios (nome, senha) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, password_hash($senha, PASSWORD_DEFAULT));
    $stmt->execute();
}

function getAllUser($str = "") {
    $db = conecta();
    $sql = "SELECT * FROM usuarios WHERE nome LIKE ?";
    $stmt = $db->prepare($sql);
    $stmt->execute(["%$str%"]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsuarios() {
    $db = conecta();
    $sql = "SELECT id, nome FROM usuarios";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertUser($nome, $senha) {
    $db = conecta();
    $sql = "INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', password_hash($senha, PASSWORD_DEFAULT));
    $stmt->execute();
    return $stmt->rowCount();
}

function updateUser($id, $nome, $senha) {
    $db = conecta();
    $sql = "UPDATE usuarios SET nome = :nome, senha = :senha WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', password_hash($senha, PASSWORD_DEFAULT));
    $stmt->execute();
    return $stmt->rowCount();
}
?>
