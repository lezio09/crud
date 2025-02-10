<?php
    include_once("bd.php");
    include_once("pessoaDAO.php");

    if(isset($_POST["acao"]) && $_POST["acao"] == "entrar"){
        if(isset($_POST["usuario"]) && isset($_POST["senha"])){
            $nome = $_POST["usuario"];
            $senha = $_POST["senha"];
            save($nome,$senha);
            header("Location: listagem.php");
        }else{
            echo "Erro";
        }
    }
    if(isset($_POST["acao"]) && $_POST["acao"] == "editar"){
        if(isset($_POST["usuario"]) && isset($_POST["senha"])){
            $nome = $_POST["usuario"];
            $senha = $_POST["senha"];
            save($nome, $senha);
            header("Location: listagem.php");  
        }else{
            echo "Erro ao altetar usuario!"
        }
    if(isset($_POST["acao"]) && $_POST["acao"] == "remover"){
        if(isset($_POST["usuario"]) && isset($_POST["senha"])){
            $nome = $_POST["usuario"];
            $senha = $_POST["senha"];
            save($nome, $senha);
            header("Location: listagem.php");
        }else{
            echo "Erro ao remover usuario!"
        }
    }

    }

?>
