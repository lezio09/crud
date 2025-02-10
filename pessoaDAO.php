<?php 
    include_once("bd.php");
    
    function save($nome,$senha){
        $db = conecta();

        $sql = "insert into usuario (nome,senha) values (?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$senha);
        $stmt->execute();
    }
    function getAllUser( $str =""){
        $db = conecta();
        $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$str%'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }
    function getUsuarios(){
        $db =conecta();
        $sql = "SELECT * FROM usuarios";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function insertUser($nome,$senha){
        $db = conecta();
        $sql = "INSERT INTO usuarios (id, nome, senha, email, data_nascimento) VALUES (:nome, :senha, NOW())";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
    
        $stmt->execute();
        return $stmt->rowCount();
    }
    function updateUser($id, $nome, $senha){
        $conn = conectar();
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
        
        $stmt->execute();
        return $stmt->rowCount();
    }
?>