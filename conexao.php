<?php

    function conecta_bd(){
        $servername = "mysql-aluno";
        $username = "root";
        $password = "aluno";
        $dbname = "webti";

        //criar conexão
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    }

    function cadastra_usuario($nome,$email,$login,$senha){
        $con = conecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (nome, email, login, senha)
                                VALUES (:nome, :email, :login, :senha)");

        $stmt ->bindParam (':nome',$nome); 
        $stmt ->bindParam (':email',$email); 
        $stmt ->bindParam (':login',$login); 
        $stmt ->bindParam (':senha',$senha); 
        return $stmt ->execute();

    }

?>
