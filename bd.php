<?php 
    function conecta(){
        $user="root";
        $senha="";
        $database="crud";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($connId){
        if($connId){
            echo "Sucesso ao conectar!";
        }else{
            echo "Ops! Erro ao tentar se conectar.";
        }
    }
?>