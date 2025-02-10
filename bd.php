<?php 
    function conecta(){
        $user="root";
        $senha="";
        $db="crud";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$db",$user, $nome, $senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($dbId){
        if($dbId){
            echo "Sucesso ao conectar!";
        }else{
            echo "Ops! Erro ao tentar se conectar.";
        }
    }
?>