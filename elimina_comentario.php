<?php
    //Chamando a conexão
    include_once("conexao.php");

    //Establecendo conexão com o json
    header('Content-Type: application/json');

    //Pegando o ID do comentário
    $id_comentario = $_POST['id_comentario'];

    $resultado = $conexao->prepare("DELETE FROM comentarios WHERE codigo_comentario = ?");
    $resultado->execute([$id_comentario]);

    if($resultado->rowCount() >= 1) echo json_encode("eliminou");
    else echo json_encode("não funcionou");