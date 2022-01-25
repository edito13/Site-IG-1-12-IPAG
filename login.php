<?php
// Startando as sessões
    session_start();
    if(isset($_SESSION['cadastrado'])){
    // Se existe atribui-a a nome para usar o seu valor
        $nome = $_SESSION['cadastrado'];
        ?>
        <script>
        // Depois de 2s ele mostrará a sms de aviso ao usuário
            setTimeout(function(){
                alert("Já podes entrar com a tua conta nova <?php echo $nome ?>")
            },1500)
        </script>
        <?php
            unset($_SESSION['cadastrado']);
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <?php
        include_once('links.php');
    ?>
    <title>Login</title>
</head>
<body>
    <div class="main">
        <h1><i class="fa fa-check"></i> Inicie a sua sessão</h1>
        <form action="" method="post">
            <div>
                <label for="email"><i class="icon-user"></i> E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha"><i class="fa fa-key"></i> Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div><button type="submit" name="btn-logar"><i class="fa fa-send"></i> Enviar</button></div>
        </form>
        <a href="cadastro.php">Não tenho uma conta, quero criar.</a>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/logar.js"></script>
</body>
</html>