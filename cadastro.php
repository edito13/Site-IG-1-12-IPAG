<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <?php
        include_once('links.php');
    ?>
    <title>Cadastro</title>
</head>
<body>
    <div class="main">
        <h1><i class="fa fa-list"></i> Cadastre-se no nosso site</h1>
        <form method="POST">
            <div class="campos">
                <div class="first-column">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div class="sexo">
                        <div><label for="masculino">Masculino</label><input type="radio" name="sexo" id="masculino"></div>
                        <div><label for="feminino">Feminino</label><input type="radio" name="sexo" id="feminino"></div>
                    </div>
                </div>
                <div class="second-column">
                    <div class="campo">
                        <label for="tel">Telefone</label>
                        <input type="text" name="telefone" id="tel">
                    </div>
                    <div class="campo">
                        <label for="data">Data de nascimento</label>
                        <input type="date" name="data" id="data">
                    </div>
                    <div class="campo">
                        <label for="co-senha">Confirmar senha</label>
                        <input type="password" id="co-senha">
                    </div>
                </div>
            </div>
            <div class="btn">
                <button type="submit"><i class="fa fa-check"></i> Criar conta</button>
            </div>
        </form>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/cadastro.js"></script>
</body>
</html>