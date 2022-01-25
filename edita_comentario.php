<?php
    //Chamando a conexão
    include_once("conexao.php");

    //Establecendo conexão com o json
    header('Content-Type: application/json');
    
    //Pegando o comentário e o ID dele
    $comentario = $_POST['comentario'];
    $id_comentario = $_POST['id_comentario'];

   $resultado = $conexao->prepare("UPDATE comentarios SET comentario = ? WHERE codigo_comentario = ?");
    $resultado->execute([$comentario,$id_comentario]);

    if($resultado->rowCount() >= 1) echo json_encode("sim");
    else echo json_encode("Está gato broh");