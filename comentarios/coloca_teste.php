<?php
    session_start();
    header("Content-Type: application/json");
    $nome_passado = $_SESSION['nome_passado'];
/*
# Incluindo a conexão nesse arquivo para usa-la
    include_once("../conexao.php");
# Estabelecendo a comunicação por intermédio do JSON
    header('Content-Type: application/json');

# Pegando os dados que foram mandados por intermédio do AJAX
    $nome = $_POST['nome'];
    $id_usuario = $_POST['codigo_usuario'];
    $comentario = $_POST['comentario'];

# Inserindo no banco de dados os dados pegados
    $resultado = $conexao->prepare("INSERT INTO comentarios (codigo_usuario, nome_usuario, comentario, data_comentario) VALUES (?,?,?, NOW())");
    $resultado->execute([$id_usuario,$nome,$comentario]);

    if($resultado->rowCount() >= 1){
#   Se pelo menos uma linha for inserida ele retornará "SIM"
        echo json_encode("sim");
    }else{
#   Senão retornará "ESTÁ GATO"
        echo json_encode("Está gato");
    }*/

    echo "<h1>$nome_passado</h1>";