/*
* login altentication
* 2020-02-17
* eduardo albuquerque
* last update 2020-02-19
* */

//get variable of form
let cpf = document.querySelector("#cpf")
let pwd = document.querySelector("#pwd")
let btnEnviar = document.querySelector("#btnEnviar")
let select = document.querySelector('#select')


//when click in form
if (btnEnviar != null){

    btnEnviar.addEventListener("click",function (event) {
        event.preventDefault()
        let url = "validadeUser/getData/"+cpf.value+"/"+pwd.value+"/"+select.value
        console.log(url)
        //******VERIFICAR A NECESSIDADE DE PASSAR ESSE OBJETO
        var obj = { strcpf: cpf.value, strpwd: pwd.value};

        fetch(url, {
            method : 'post',
            mode:    'cors',
            headers: {
                'Content-Type': 'application/json',  // sent request
                'Accept':       'application/json'   // expected data sent back
            },
            //********* VERIFICAR A NECESSIDADE DO BODY, JA QUE TUDO É PELA URL
            body: JSON.stringify(obj)
        })
            .then(function(res) {
                return res.json()
            })
            .then(function (data){
                if(data['acesso']){
                    window.location.href="home"
                }else{
                    toast.show("Usuário/Senha ou acesso negado!",'error')
                }
            })
            .catch(function(error){
                toast.show('Problemas com a autenticação - '+error,'warning')
            } )
    })
}
