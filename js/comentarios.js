(function(){
// Já podemos pegar o nome e id do usuario porque já estão disponivéis porque não são preenchidos pelo utilizador
    const nome_usuario = document.querySelector('#nome_usuario')
    const id_usuario = document.querySelector('#codigo_usuario')

// Pegamos o form do comentario para quando for enviado pergarmos o comentário do usuario
    const form = document.querySelector("form")
    form.addEventListener("submit", (e)=>{
        e.preventDefault()
        const comentario = document.querySelector("#conteudo-comenta")
        
        try {
            if(comentario.value == "") throw "O comentário está vazio!"

            $.ajax({
                url: "comentarios/setComentarios.php",
                method: "POST",
                data: {nome: nome_usuario.value, codigo_usuario: id_usuario.value, comentario: comentario.value},
                dataType: "json"
            }).done(function(resultado){
                // Se inseriu no banco, então da um refresh na página, e executará a função pega dados e inserirá na página o novo comentário
                if (resultado == 'sim') window.location.reload()
            })
        } catch (error) {
            alert(error)
            return false
        }
    })

// Criando a função atualiza comentarios para atualizar o número de comentários dinâmicamente quando executada
    function atualizaComentario(){
    /* Pegando todas as divs comentarios e o número total delas é o número de comentários existentes, ou pode ser o 
    total de comentarios encontrado no banco*/
        const comentarios = [...document.querySelectorAll(".div-comentario")]
        const resposta = document.querySelector("#resp-comenta")
    // Se nenhum comentário então "Nenhum comentário ainda"
        if (comentarios.length == 0) resposta.innerHTML = "Nenhum comentário ainda"
    // Se 1 comentário então "1 comentário"
        else if (comentarios.length == 1) resposta.innerHTML = `${comentarios.length} comentário`
    // Se for mais de 1 então o número de comentários
        else resposta.innerHTML = `${comentarios.length} comentários`
    }


// Criando função para pegar comentarios que já estão no banco e exibir-los, e atualizar o número de comentários
    function pegaComentarios(){
        $.ajax({
            url: "comentarios/busca_comentarios.php",
            method: "GET",
            dataType: "json"
        }).done(function(resultado){
            
            resultado.forEach((elemento)=>{
            let resposta = ""
            // Formatando a data recebida do banco
                //Pegando a data do comentário
                const data_comentario = elemento.data_comentario
                const dataTime = data_comentario.split(" ")
                const SoDataComentario = dataTime[0].split("-")
                const diaComentario = SoDataComentario[2]
                const mesComentario = SoDataComentario[1]
                const anoComentario = SoDataComentario[0]
                const SoHoraComentario = dataTime[1].split(":")
                const horaComentario = SoHoraComentario[0]
                const minutoComentario = SoHoraComentario[1]
                const segundoComentario = SoHoraComentario[2]
                const dataOficial = `${diaComentario}/${mesComentario}/${anoComentario}`
                //Pegando a data actual
                const date = new Date()
                const dataActual = date.toLocaleDateString().split("/")
                const diaActual = dataActual[0]
                const mesActual = dataActual[1]
                const anoActual = dataActual[2]

                let horaIdeal;
                let minutoIdeal;
                let diaIdeal;
                let mesIdeal;
                let anoIdeal;
                let segundoIdeal

                //Pegando o time actual
                const horaActual = date.getHours()
                const minutoActual = date.getMinutes()
                const segundoActual = date.getSeconds()
                
                // Se comentaram hoje
                if(dataOficial == date.toLocaleDateString()){
                    // Se comentaram essa hora
                    if(horaActual == horaComentario){
                        // Se comentaram agora mesmo, mostra agora mesmo
                        if(minutoActual == minutoComentario) resposta = `Comentado agora mesmo.`
                        // Se comentaram essa hora mais faz minuto/s já, mostra esse/s minuto/s que passaram-se
                        else if(minutoActual > minutoComentario){
                            minutoIdeal = minutoActual - minutoComentario
                            if(minutoIdeal == 1){
                            // Se estamos num minuto depois do comentado, mas ñ os segundos ainda ñ chegou, ainda é agora mesmo
                                if(segundoActual < segundoComentario) resposta = `Comentado agora mesmo.`
                                else resposta = `Comentado há ${minutoIdeal} minuto.`
                            }else{
                                // Se já passou-se + de um minuto, mas o segundo ainda ñ chegou então esse minuto ñ chegou ainda, volta um minuto
                                if(segundoActual < segundoComentario){
                                    
                                    if(minutoIdeal == 2) resposta = `Comentado há ${--minutoIdeal} minuto.`
                                    else resposta = `Comentado há ${--minutoIdeal} minutos.`
                                // Se ñ mostra o minuto mesmo
                                } else resposta = `Comentado há ${minutoIdeal} minutos.`
                            }
                        }
                    }else if(horaActual > horaComentario){
                    // Se já passaram-se uma ou mais, mostra a/s hora/s que passaram-se...pegando a hora de diferença  
                            horaIdeal = horaActual - horaComentario
                            if(horaIdeal == 1){
                            // Se comentaram uma hora antes mas ainda não fez uma hora mostra os minutos que passarm-se
                                if(minutoActual < minutoComentario){
                                    var minutoTotal = 60 + minutoActual
                                    minutoIdeal = minutoTotal - minutoComentario
                                    if(minutoIdeal == 1) resposta = `Comentado há ${minutoIdeal} minuto.`
                                    else resposta = `Comentado há ${minutoIdeal} minutos.`
                            // Senão mostra a  hora
                                }else resposta = `Comentado há ${horaIdeal} hora.`
                            
                            }else{
                            // Se já fez mais de uma hora mas ainda não chegou na hora proxima, pork o minuto ainda não chegou, então essa hora não conta, --1
                                if(minutoActual < minutoComentario){
                                // Se passou-se duas horas, menos uma fica uma hora e não horas
                                    if(horaIdeal == 2) resposta = `Comentado há ${--horaIdeal} hora.`
                                    else resposta = `Comentado há ${--horaIdeal} horas.`
                            // Se não, então mostra simplismente as horas
                                }else resposta = `Comentado há ${horaIdeal} horas.`
                            }
                        }
                // Se já passaram-se dia/s, mostra o/s dia/s que passaram-se 
                }else if(mesActual == mesComentario && anoActual == anoComentario && diaActual > diaComentario){
                
                //Pegando diaIdeal para verificar quantos dias passaram-se    
                    diaIdeal = diaActual - diaComentario

                // Se diaIdeal == 1 é porque só passou-se um dia supostamente, né
                    if(diaIdeal == 1){

                        //Pegando a horaTotal para subtrair com a hora comentada e obter a hora que passaram-se que é a horaIdeal
                        var horaTotal = 24 + horaActual
                        horaIdeal = horaTotal - horaComentario
                        // Se hora actual for menor que a hora comentada no dia anterior, então só passaram-se horas, mostre-a/s
                        if(horaActual < horaComentario){
                            
                            // Se ainda não chegou no minuto comentado nessa hora, então essa hora não conta, por isso --1    
                            if(minutoActual < minutoComentario) resposta = `Comentado há ${--horaIdeal} horas.`

                            // Se já chegou no minuto comentado então mostra a/s horas/s que passaram-se até aqui
                            else resposta = `Comentado há ${horaIdeal} horas.`
                            
                        }else if(horaActual == horaComentario){
                            if(minutoActual < minutoComentario) resposta = `Comentado há ${--horaIdeal} horas.`
                            else resposta = `Comentado ontém ás ${horaComentario}h:${minutoComentario}.`
                        }else resposta = `Comentado ontém ás ${horaComentario}h:${minutoComentario}.`
                // Se já passaram-se dias, mostra os dias que passaram-se
                    }else{
                        if(horaActual < horaComentario){
                            if(diaIdeal == 2) resposta = `Comentado há ${--diaIdeal} dia ${diaComentario}/${mesComentario}.`
                            else resposta = `Comentado há ${--diaIdeal} dias ${diaComentario}/${mesComentario}.`
                        }else if(horaActual == horaComentario){
                            if(minutoActual < minutoComentario){
                                if(diaIdeal == 2) resposta = `Comentado há ${--diaIdeal} dia ${diaComentario}/${mesComentario}.`
                                else resposta = `Comentado há ${--diaIdeal} dias ${diaComentario}/${mesComentario}.`
                            }else  resposta = `Comentado há ${diaIdeal} dias ${diaComentario}/${mesComentario}.`
                        }else resposta = `Comentado há ${diaIdeal} dias ${diaComentario}/${mesComentario}.`
                    }
                    
                /*// Se já passaram-se mês/es, mostra o/s mês/es que passaram-se
                }else if(anoActual == anoComentario && mesActual > mesComentario){
                    mesIdeal = mesActual - mesComentario
                    if(mesIdeal == 1) resposta = `Comentado há ${mesIdeal} mês ás ${horaComentario}h:${minutoComentario}.`
                    else resposta = `Comentado há ${mesIdeal} mêses ás ${horaComentario}h:${minutoComentario}.`
                }
                // Se já passaram-se ano/anos, mostra o/s ano/s que passaram-se
                else if(anoActual > anoComentario && (mesActual == mesComentario || mesActual > mesComentario) && (diaActual == diaComentario || diaActual > diaComentario) && (horaActual == horaComentario || horaActual > horaComentario) && (minutoActual == minutoComentario || minutoActual > minutoComentario)){
                    anoIdeal = anoActual - anoComentario
                    if(anoIdeal == 1) resposta = `Comentado há ${anoIdeal} ano.`
                    else resposta = `Comentado há ${anoIdeal} anos.`*/
                }

            // Se for o usuario actual logado, no seu comentário apôs o seu nome vem "você", e pode editar seu comentário
                if(elemento.nome_usuario == nome_usuario.value && elemento.codigo_usuario == id_usuario.value){
                    $('.container-comentarios').prepend(`
                        <div class="div-comentario">
                            <h4 id="nome">${elemento.nome_usuario} <span>Você</span></h4>
                            <span id="comentario" style="background: #080819;">${elemento.comentario}</span>
                            <p id="dados-comentario">${resposta} <a href="" data-toggle="modal" data-target="#modal${elemento.codigo_comentario}"><i class="fa fa-edit"></i> Editar</a></p>
                        </div>

                        <!-------------------Modal de Editar comentário--------------------->
                        <div class="modal fade" id="modal${elemento.codigo_comentario}" tabindex="-1" role="dialog">
                            <div class="modal-dialog"  role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white titulo-modal"><i class="fa fa-edit"></i> Editar comentário</h5>
                                        <button class="close text-white" data-dismiss="modal">
                                            <p>&times;</p>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea class="text-dark sms form-control" id="campo${elemento.codigo_comentario}">${elemento.comentario}</textarea>
                                            <div class="d-flex justify-content-between py-3">
                                                <button class="btn btn-primary" onclick="editar(${elemento.codigo_comentario})">Editar <i class="fa fa-edit"></i></button>
                                                <button class="btn btn-warning" onclick="eliminar(${elemento.codigo_comentario})">Eliminar <i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `)
                }else{
            // E senão não vem nada, e não pode editar
                    $('.container-comentarios').prepend(`
                        <div class="div-comentario">
                            <h4 id="nome">${elemento.nome_usuario}</h4>
                            <span id="comentario">${elemento.comentario}</span>
                            <p id="dados-comentario">${resposta}</p>
                        </div>
                    `)
                }

            })
        // E depois de exibir-mos os dados, atualizamos o número de comentários
            atualizaComentario()
        })
    }
// Essa função será executada assim que a página carregar mesmo
    pegaComentarios()

})()