<?php
    session_start();
    include_once('conexao.php');
    if(isset($_SESSION['logado'])){
        $email = $_SESSION['logado'];
    }
// Se estiver logado, pega o email e seleciona o usuario a quem o email está pertence
    $resultado = $conexao->query("SELECT * FROM usuarios WHERE email = '$email'");
    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

// Passando o array que contem dados do usuarios para a variavel usuarios
    $usuario = $dados[0];

    

