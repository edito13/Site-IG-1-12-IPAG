function editar(id_comentario){
    // Pegando o textarea com o valor do comentario para editar, já que possui id do comentário
    const conteudo = document.querySelector("#campo"+id_comentario)

    try {
        if(conteudo.value == "") throw "O comentário está vazio, quer eliminar?"

    // Se chegar aqui é porque não passou na condição, senão ele iria no catch e não chegaria aqui
    // Mandando o comentario para editar no banco
        $.ajax({
            url: "edita_comentario.php",
            method: "POST",
            data: {comentario: conteudo.value, id_comentario: id_comentario},
            dataType: "json"
        }).done((resultado)=>{

                $("#modal"+id_comentario).modal("hide")
                setTimeout(function(){
                    window.location.reload()
                },1100)
            
        })
    
    } catch (error) {
        const confirma = confirm(error)
        if(confirma == true){
            const outraVez = confirm("O comentário será eliminado, tem mesmo a certeza?")
            if(outraVez == true) eliminar(id_comentario)
        }
        return false
    }

}
function eliminar(id_comentario){
    const outraVez = confirm("O comentário será eliminado, tem mesmo a certeza?")
    if(outraVez == true) {
        $.ajax({
            url: "elimina_comentario.php",
            method: "POST",
            data: {id_comentario: id_comentario},
            dataType: "json"
        }).done((resultado)=>{
    
            $("#modal"+id_comentario).modal("hide")
            setTimeout(function(){
                window.location.reload()
            },1100)
            
        })
    }
}