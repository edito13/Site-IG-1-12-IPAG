<footer>
    <div class="topicos">
        <div>
            <h3><i class="icon-users"></i> Quem somos?</h3>
            <p>Somos estudantes do Instituto Politécnico de Administração e Gestáo da Catumbela, do curso de Informática de Gestão. Actualmente frequentamos a 12ª Classe.</p>
        </div>
        <div>
            <h3>Links rápidos</h3>
            <ul>
                <li><p><i class="fa fa-tags"></i> Sobre nós</p></li>
                <li><p><i class="icon-camera"></i> Galeria</p></li>
                <li><p><i class="icon-tv"></i> Notícias</p></li>
                <li><p><i class="fa fa-phone"></i> Contacto</p></li>
            </ul>
        </div>
        <div>
            <h3>Redes sociais</h3>
            <ul>
                <li><p><i class="icon-facebook"></i> Facebook</p></li>
                <li><p><i class="icon-youtube"></i> Youtube</p></li>
                <li><p><i class="fa fa-whatsapp"></i> WhatsApp</p></li>
                <li><p><i class="icon-twitter"></i> Twitter</p></li>
            </ul>
        </div>
        <div>
            <h3>Nossa Equipa</h3>
            <ul>
                <li><p>Designer</p></li>
                <li><p>Programadores</p></li>
                <li><p><i class="icon-"></i> Técnicos de Rede</p></li>
                <li><p>Técnicos de BD</p></li>
            </ul>
        </div>
    </div>

    <!-------------------Modal de término de sessão--------------------->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog"  role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-white titulo-modal"><i class="icon-login"></i> Terminar sessão</h5>
                    <button class="close text-white" data-dismiss="modal">
                        <p>&times;</p>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="text-white sms">Tens a certeza que queres terminar sessão?</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" id="btn-logout" data-dismiss="modal" class="close">Sim, eu tenho</button>
                    <button class="btn btn-danger" data-dismiss="modal" class="close">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!---------------O modal será penultimo para não estragar o estilo------------------->
    <div>
        <hr>
        <p>Copyright 2021&copy;  12ª IG-1</p>
    </div>
</footer>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    $('#btn-logout').click(function(){
    // Quando clicar no botão do modal, depois de 3 segundos vai redirecionar para logout.php e destruir as sessions
        setTimeout(()=>{
            window.location = "logout.php";
        },3000)
    })
</script>