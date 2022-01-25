(function(){
    const form = document.querySelector("form");
    form.addEventListener("submit",(e)=>{
        e.preventDefault();
        const email = document.querySelector("#email").value;
        const senha = document.querySelector("#senha").value;

        try{
            if(email == "" || email.indexOf("@") == -1){
                if(email == "") throw "E-mail está vazio, preencha-o!"
                else if(email.indexOf("@") == -1) throw "E-mail sem o @, coloque-o!"
            }
            else if(senha == "") throw "Senha está vazia, preenche-a!"

            $.ajax({
                url: 'verifica_login.php',
                method: 'POST',
                data: {email: email, senha: senha},
                dataType: 'json'
            }).done((resultado)=>{
            // Se encontrou no banco, então pode acessar a home, logando...
                if(resultado == "Sim") window.location = 'home.php'
                else alert(resultado)
            })

        }catch(e){
            alert(e)
            return false;
        }
    })
})()