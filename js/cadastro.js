(function(){
    const senha = document.querySelector('#senha')
    senha.addEventListener('blur', (e)=>{
        const co_senha = document.querySelector('#co-senha')
        co_senha.addEventListener('blur', (e)=>{
            if(senha.value != co_senha.value){
                alert("A senha é diferente da confirmação!")
            }
        })
    })

    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
    /* Pegado valores dos campos do form*/
        const nome = document.querySelector('#nome').value;
        const email = document.querySelector('#email').value;
        const senha = document.querySelector('#senha').value;
        const sexo_m = document.querySelector('#masculino');
        const sexo_f = document.querySelector('#feminino');
        const telefone = document.querySelector('#tel').value;
        const data = document.querySelector('#data').value;
        const co_senha = document.querySelector('#co-senha').value;
    /* Verificando se a senha inserida e sua conirmação são iguais, true para iguais e false para diferentes */
        const senha_oficial = (senha == co_senha) ? true : false;
    /*----------------------------------------*/
    /* Vai armazenar o valor do sexo, um dos dois, feminino ou masculino 
        atribui a sexo = "" pork ele por padrão seria undefined, e com isso  se ñ for preenchido(checkado) ele será 
        undefined e ñ passará no if pork undefined é != de "" então não alertará que há campos vazios e quando 
        atribuimos á "" se não for preenchido sexo será == "" e alertará que há campos vazios. 
    */     
        var sexo = "";
        /* Verificando qual sexo está checkado */
        if(sexo_m.checked) sexo = "Masculino"

        else if(sexo_f.checked) sexo = "Feminino"

    // Tratando erros com Try e Catch
        try{
        /* Verificando se os campos estão vazios, e se não estão manda-los via ajax para o php e colocar no banco */
            if(nome == ""){
                throw "Nome está vazio!";
            }else if(email == "" || email.indexOf("@") == -1){
                if(email  == "") throw "E-mail está vazio";
                else if(email.indexOf("@") == -1) throw "E-mail inválido, falta o @!";
            }
            else if(senha == "")throw "Senha está vazia!";
            else if(sexo == "") throw "Sexo está vazio!";
            else if(telefone == "" || isNaN(telefone) == true || telefone.length != 9){
                if(telefone == "") throw "Telefone está vazio";
                else if(isNaN(telefone) == true) throw "Telefone contém letras, erro!";
                else if(telefone.length != 9) throw "Telefone tem de ter 9 caracteres e ele tem "+telefone.length;
            } 
            else if(data == "") throw "Data está vazia!" ; 
            else if(co_senha == "") throw "Confirme a sua senha!";
            else if(senha_oficial != true) throw "A senha e a confirmação não batem";
        /* Se estiver tudo OK e não executar nenhum throw manda os dados via ajax para o php */
            const telefoneOficial = Number(telefone)
            $.ajax({
                url: 'cadastra_usuarios.php',
                method: 'POST',
                data: {nome: nome, email: email, senha: senha, sexo: sexo, telefone: telefoneOficial, data: data},
                dataType: 'json'
            }).done((resultado)=>{
                if(resultado == "Inserido") window.location = "login.php"
                else alert(resultado)
            })

        }catch(e){
            /* Se qualquer condição acima for satisfeita ele exibe o erro e retorna false */
            alert(e)
            return false;
        }
    })
})()
    
