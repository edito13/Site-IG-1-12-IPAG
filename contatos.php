<?php
    include_once("dados_usuarios.php");
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato-estilo.css">
    <?php
        require_once('links.php');
    ?>
    <title>Contactos</title>
</head>
<body>
        <header>
            <div class="logo">
                <div class="rotado"><p>IG</p></div>
                <p>12ª IG-RG</p>
            </div>
            <nav>
                <ul>
                    <li title="Página Inicial"><a class="a" href="home.php"><i class="icon-home"></i> Home</a></li>
                    <li title="Sobre nós"><a class="a" href="sobre-nos.php"><i class="fa fa-tags"></i> Sobre nós</a></li>
                    <li title="Várias fotos"><a class="a" href="galeria.php"><i class="fa fa-camera"></i> Galeria</a></li>
                    <li title="Contacte-nos"><a class="ativo" href="contatos.php"><i class="fa fa-phone"></i> Contacto</a></li>
                    <li title="Termine a sua sessão"><a class="logout" href="" data-toggle="modal" data-target="#logout"><i class="icon-login"></i> Terminar sessão</a></li>
                </ul>
            </nav>
        </header>
    <main>
        <hr>
        <div class="conteudo">
            <div  class="informacoes">
                <h2>Informações de contactos</h2>
                <ul>
                    <li><img src="img/Icones/geo-alt-fill.png" alt=""><p>Catumbela - Luongo</p></li>
                    <li><img src="img/Icones/telephone-fill.png" alt=""><p>996 000 000</p></li>
                    <li><img src="img/Icones/envelope-fill.png" alt=""><p>ig2021@ig-ipag.ao</p></li>
                    <li><img src="img/Icones/globe.png" alt=""><p>ig-ipag.ao</p></li>
                </ul>
            </div>
            <div class="contacte">
                <h2>Contacte-nos</h2>
                <form action="envia.php" method = "POST">
                    <div><label for="nome">Nome</label><input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']?>"></div>
                    <div><label for="email">E-mail</label><input type="email" id="email" name="email" value="<?php echo $usuario['email']?>"></div>
                    <div><label for="assunto">Assunto</label><input type="text" id="assunto" name="assunto"></div>
                    <div><label for="msg">Mensagem</label><textarea name="msg" id="msg" cols="30" rows="10"></textarea></div>
                    <div class="btn"><button type="submit"><i class="fa fa-send"></i> Enviar</button></div>
                </form>
            </div>
        </div>
        <hr>
        </main>
        <?php
            require_once('footer.php');
        ?>
        <script>
            window.onload = function(){
                $("#assunto").focus()
                
                
            }
        </script>
</body>
</html>