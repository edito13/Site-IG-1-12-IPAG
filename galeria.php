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
    <link rel="stylesheet" href="css/galeria-estilo.css">
    <?php
        require_once('links.php');
    ?>
    <title>Galeria</title>
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
                <li title="Várias fotos"><a class="ativo" href="galeria.php"><i class="fa fa-camera"></i> Galeria</a></li>
                <li title="Contacte-nos"><a class="a" href="contatos.php"><i class="fa fa-phone"></i> Contacto</a></li>
                <li title="Termine a sua sessão"><a class="logout" href="" data-toggle="modal" data-target="#logout"><i class="icon-login"></i> Terminar sessão</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <div class="titulo-galeria">
           <h1><i class="fa fa-camera"></i> Galeria</h1>
            <p>12ª IG-RG, ano lectivo de 2020/2021</p> 
        </div>
        
        <div class="fotos">
            <div class="first-row">
                <div></div>
                <div></div>
            </div>
            <div class="second-row">
                <div></div>
                <div></div>
            </div>
            <div class="third-row">
                <div></div>
            </div>
        </div>
        <hr>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>
</html>