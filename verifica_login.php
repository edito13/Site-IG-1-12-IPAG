<?php
    session_start();
    include_once('conexao.php');

    header('Content-Type: application/json');

        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
# Selecionando no banco onde o email e a senha batem
        $resultado = $conexao->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        
        if(count($dados) >= 1){
        # Se o array que retornar tiver pelo menos um array com dados, ele encontrou no banco de dados
            echo json_encode("Sim");
            $_SESSION["logado"] = $email;
        # sessão logado é igual a email que logamos, para sabermos quais os dados do usuario que logou
        }else{
        # Se não, ele não encontrou no banco de dados
            echo json_encode("Erro, não encontrou os dados no banco!");
        }