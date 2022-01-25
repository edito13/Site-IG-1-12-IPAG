<?php

    header("Content-Type: application/json");
    
    $conexao = new PDO("mysql: host=localhost; dbname=fetch;","root","");

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $resultado = $conexao->prepare("INSERT INTO teste (email) VALUES (?)");
    $resultado->execute([$email]);

    if($resultado->rowCount() >= 1) echo json_encode("inseriu");
    else echo json_encode("esta gato");