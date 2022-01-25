<?php
session_start();
// Chamando o arquivo da conexão
    include_once('conexao.php');
    header('Content-Type: application/json');
    
// Pegando os dados que estão vindo via ajax
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
//---------------------------------------------

// Inserindo no banco de dados com o PDO
    $resultado = $conexao->prepare("INSERT INTO usuarios (nome, email, senha, sexo, telefone, data_nascimento, data_cadastro) VALUES (?,?,?,?,?,?, NOW())");
    $resultado->execute([$nome, $email, md5($senha), $sexo, $telefone, $data]);

    if($resultado->rowCount() >= 1){
        $_SESSION["cadastrado"] = $nome;
        echo json_encode("Inserido");
    }else{
        echo json_encode("Erro ao cadastrar!");
    }