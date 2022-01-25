<?php
/*
    Não startei a sessão primeiro porque no arquivo dados_usuario já startei então startaria 2 vezes e notificaria 
    que já existe, como não podemos usar os metodos_once para incluir na página então usamos a sessão startada no 
    arquivo dados_usuarios...ou o contrario startar aqui e no arquivo não startar

*/
    include_once('dados_usuarios.php');
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home-estilo.css">
    <?php
        require_once('links.php');
    ?>
    <title>IG-1 12ª</title>
</head>
<body>
    <header>
        <div class="logo">
            <div class="rotado"><p>IG</p></div>
            <p>12ª IG-RG</p>
        </div>
        <nav>
            <ul>
                <li title="Página Inicial"><a class="ativo" href="home.php"><i class="icon-home"></i> Home</a></li>
                <li title="Sobre nós"><a class ="a" href="sobre-nos.php"><i class="fa fa-tags"></i> Sobre nós</a></li>
                <li title="Várias fotos"><a class ="a" href="galeria.php"><i class="fa fa-camera"></i> Galeria</a></li>
                <li title="Contacte-nos"><a class ="a" href="contatos.php"><i class="fa fa-phone"></i> Contacto</a></li>
                <li title="Termine a sua sessão"><a class="logout" href="" data-toggle="modal" data-target="#logout"><i class="icon-login"></i> Terminar sessão</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <div class="banner">
        </div>
        <section class="breve-desc">
            <div class="titulo">
                <h1>Nossa História</h1>
                <p>12ª IG-RG, ano lectivo de 2020/2021</p>
            </div>
            <div class="conteudo">
                <div class="textos">
                    <div class="t-cont">
                        <img src="img/Acessorios/passaro.png" alt="">
                        <h3>Quem somos?</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias, optio distinctio officia, cum exercitationem ipsa, accusantium dicta quae quaerat mollitia sit magnam voluptates.</p>
                    <p style="margin-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias.</p>
                </div>
                <div class="textos">
                    <div class="t-cont">
                        <img src="img/Acessorios/Shape.png" alt="">
                        <h3>Como tudo começou?</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias, optio distinctio officia, cum exercitationem ipsa, accusantium dicta quae quaerat mollitia sit magnam voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sed debitis vitae. Cupiditate nesciunt velit molestias.</p>
                </div>
            </div> 
        </section>
        <section class="aprenda-connosco">
            <img src="img/Acessorios/illustrator.png" alt="">
            <div>
                <h2>Aprenda Connosco</h2>
                <ul>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Front - End Design</p>
                    </li>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Programção Web</p>
                    </li>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Redes de Computadores</p>
                    </li>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Edição de imagens com Photoshop</p>
                    </li>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Programação SQL</p>
                    </li>
                    <li>
                        <img src="img/Acessorios/Grupo 1.png" alt="">
                        <p>Programação C#</p>
                    </li>
                </ul>
                <div>
                    <a>Saiba mais</a>
                    <img src="img/Acessorios/play.png" alt="">
                </div>
            </div>
        </section>
        <section class="news-now">
            <div class="titulo">
                <h1>Notícias recentes</h1>
                <p>12ª IG-RG, ano lectivo de 2020/2021</p>
            </div>
            <div class="noticias">
                <figure>
                    <img src="img/Notícias/image bg.png" alt="">
                    <figcaption>
                        <h3>Participação na Jornada científica do IPAG</h3>
                        <p>By José |  12 de Março de 2021</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/Notícias/PT.png" alt="">
                    <figcaption>
                        <h3>Apresentação dos trabalhos de PT</h3>
                        <p>By Márcio Manuel | 10 de Maio 2021</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/Notícias/Campeonato.png" alt="">
                    <figcaption>
                        <h3>Campeonato desportivo do IPAG 2020/2021</h3>
                        <p>By António Jr | 18 Janeiro 2020</p>
                    </figcaption>
                </figure>
            </div>
            <span>
                <img src="img/Acessorios/carosolt.png" alt="">
            </span>
        </section>
        <hr>
        <section class="comente-session">
            <div class="titulo-comenta">
                <h2>Comentários <small><i class="fa fa-arrow-right"></i> 
                        <span id="resp-comenta">Ainda não tem nenhum comentário 
                        <!----Aqui vai entrar o nº de comentarios existentes, se existir------>
                        </span>
                        <i class="icon-chat"></i>
                    </small> 
                </h2>
            </div>
            <div class="comenta">
                <form action="" method="POST">
                <!----Inputs para passar valores do php ao javaScript----->
                    <input type="hidden" id="nome_usuario" value="<?php echo $usuario["nome"]?>">
                    <input type="hidden" id="codigo_usuario" value="<?php echo $usuario["codigo_usuario"]?>">
                <!--------------------------------------------------------->
                    <div class="comenta-campo">
                        <label for="conteudo-comenta">Deixa o seu comentário <i class="fa fa-comente"></i></label>
                        <textarea class="form-control" cols="30" rows="10" id="conteudo-comenta"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-comenta"><i class="icon-chat"></i> Comentar</button>
                </form>
            </div>
            <div class="container-comentarios">
                <!-----Os comentários vão vir aqui de forma dinâmica------>
            </div>
        </section>
        <hr>
    </main>
    <script src="js/jquery-1.10.2.js"></script>
    <?php
    # Incorporando o footer nesta página com php
        include_once('footer.php');
    ?>
    <script src="js/editaComentarios.js"></script>
    <script src="js/comentarios.js"></script>
</body>
</html>