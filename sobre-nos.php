<?php
    session_start();

    if(!isset($_SESSION['logado'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sobre-estilo.css">
    <?php
        require_once('links.php');
    ?>
    <title>Sobre nós</title>
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
                <li title="Sobre nós"><a class="ativo" href="sobre-nos.php"><i class="fa fa-tags"></i> Sobre nós</a></li>
                <li title="Várias fotos"><a class="a" href="galeria.php"><i class="fa fa-camera"></i> Galeria</a></li>
                <li title="Contacte-nos"><a class="a" href="contatos.php"><i class="fa fa-phone"></i> Contacto</a></li>
                <li title="Termine a sua sessão"><a class="logout" href="" data-toggle="modal" data-target="#logout"><i class="icon-login"></i> Terminar sessão</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <div class="titulo-sobre">
            <h1><i class="fa fa-tags"></i> Sobre nós</h1>
            <p>Como tudo começou?</p>
        </div>
        <figure>
            <div></div>
            <figcaption>
                <p>Turma de Informática de Gestáo, 12ª Classe, ano lectivo 2020/2021.</p>
            </figcaption>
        </figure>
        <div class="texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias, optio distinctio officia, cum exercitationem ipsa, accusantium dicta quae quaerat mollitia sit magnam voluptates. Dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias, optio distinctio officia, cum exercitationem ipsa, accusantium dicta quae quaerat mollitia sit magnam voluptates. Nulla facilisi. Vivamus euismod pharetra viverra. Donec venenatis ut libero vitae dapibus. Vivamus elementum velit vitae diam ultricies, non hendrerit orci laoreet. Nulla malesuada lectus sit amet rutrum laoreet. Integer non pulvinar leo. Ut eu imperdiet felis, ut tempus massa. Vivamus vehicula nibh ut tortor facilisis rutrum. Vivamus scelerisque vitae elit ac efficitur. Nulla vel tortor mi. In hac habitasse platea dictumst. Maecenas at auctor tortor, vel placerat velit. Curabitur quis sagittis tortor, at vulputate metus.</p>
            <p>Ut nisl ex, sagittis a euismod sit amet, scelerisque in lectus. Donec et quam id diam finibus volutpat quis sed tellus. Vestibulum pharetra accumsan sem, non faucibus nulla bibendum quis. In felis odio, molestie vel maximus nec, convallis sed dolor. Aenean at eleifend est. Pellentesque euismod ipsum non scelerisque condimentum. Morbi vel dapibus enim. Pellentesque rutrum ac ex a elementum. Duis ut nisl neque. Etiam ut massa egestas, auctor justo eu, suscipit est. Etiam nec urna nunc. Phasellus in ex pharetra, euismod nisl eget, vestibulum sapien. Phasellus id justo ante.</p>
            <p>Nulla facilisi. Vivamus euismod pharetra viverra. Donec venenatis ut libero vitae dapibus. Vivamus elementum velit vitae diam ultricies, non hendrerit orci laoreet. Nulla malesuada lectus sit amet rutrum laoreet. Integer non pulvinar leo. Ut eu imperdiet felis, ut tempus massa. Vivamus vehicula nibh ut tortor facilisis rutrum. Vivamus scelerisque vitae elit ac efficitur. Nulla vel tortor mi. In hac habitasse platea dictumst. Maecenas at auctor tortor, vel placerat velit. Curabitur quis sagittis tortor, at vulputate metus.</p>
        </div>
        <div class="screen">
        </div>
        <hr>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>
</html>