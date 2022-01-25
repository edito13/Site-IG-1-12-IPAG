<?php
// Incluindo a conexão nesse arquivo para usa-la
    include_once("../conexao.php");

    header("Content-Type: application/json");

// Não preciso mais dessa conexao, mas lembra-me o quão difícil foi esses dias...
    #$conexao = new PDO("mysql: host=localhost; dbname=site-ig;","root","");

    $resultado = $conexao->query("SELECT * FROM comentarios");

    if($resultado->rowCount() >= 1){
        echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
    }else{
        echo json_encode("Não pegou, deu errado");
    }
?>