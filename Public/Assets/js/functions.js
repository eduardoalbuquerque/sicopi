function onlynumber(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    //var regex = /^[0-9.,]+$/;
    var regex = /^[0-9.]+$/;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

function verifyCPF(){
    let numbercpf = document.getElementById('cpf').value
    let soma =0
    let rest
    let x = 10
    // let resultado = 'CPF Válido'
    let cpfblocks = ['00000000000','11111111111','22222222222','33333333333','44444444444',
    '55555555555','66666666666','77777777777','88888888888','99999999999']
    if (cpfblocks.includes(numbercpf) || numbercpf.length<11) {
        return false
    }
    for(let i=0;i<9;i++){
        soma += numbercpf.substr(i,1)*x
        x--
    }
    soma = soma*10
    rest = (soma)%11
    if (rest===10 || rest === 11){
        rest = 0
    }
    if (rest != numbercpf.substr(9,1)){
        // resultado = 'CPF inválido'
        return false
    }
    soma=0
    x = 11
    for(let i=0;i<10;i++){
        soma += numbercpf.substr(i,1)*x
        x--
    }
    rest = (soma*10)%11
    if (rest===10 || rest === 11){
        rest = 0
    }
    if (rest != numbercpf.substr(10,1)){
        // resultado = 'CPF inválido'
        return false
    }

    return true
}

//verify cpf on login form

function getCPF() {
    if(verifyCPF()){
        let ncpf = document.querySelector("#cpf").value
        document.getElementById('cpf').style.border="1px solid rgb(102,255,204)";
        getSchema(ncpf)
    }else{
        document.getElementById('cpf').style.border="1px solid rgb(255,204,0)";
        toast.show('CPF digitado está inválido','warning')
    }
}


//gonna get schema in master.schema
function getSchema(cpf){
    //set variables
    let url = "schema/getCPF/"+cpf
    let gif = document.querySelector("#gif")
    let select = document.querySelector("#select")
    //remove classe to element gif loading
    gif.classList.remove('gifHidden')
    //start fetch to invoke schemaController
    fetch(url, {
        method : 'post',
        mode:    'cors',
        headers: {
            'Content-Type': 'application/json',  // sent request
            'Accept':       'application/json'   // expected data sent back
        }
    })
        .then(function (response) {
            return response.json()
        })
        .then(function (data) {
            if (parseInt(data[0])===0){
                gif.classList.add('gifHidden')
                toast.show('CPF não cadastrado na nossa base"',"warning")
                for(var o of document.querySelectorAll('#select > option')) {
                    o.remove()
                }
                let optReset = document.createElement('option')
                optReset.value=''
                optReset.innerHTML = 'selecione órgão'
                select.appendChild(optReset)
                document.querySelector('#pwd').value=''

            }else{
                gif.classList.add('gifHidden')
                for (let i in data){
                    let opt = document.createElement('option')
                    opt.value=data[i]
                    opt.innerHTML = data[i]
                    select.appendChild(opt)
                }

            }
        })
        .catch(function (error) {
            toast.show('CPF nao Encontrado'+error,'error')
        })
}


//função to create messages runtime in a div tag

const toast = {
    init() {
        this.hideTimeout=null
        this.el = document.createElement('div')
        this.el.className='toast'
        document.body.appendChild(this.el)
    },
    show(message, state){
        clearTimeout(this.hideTimeout)

        this.el.textContent=message
        this.el.className = 'toast toast--visible'

        if (state) {
            this.el.classList.add(`toast--${state}`)
        }

        this.hideTimeout = setTimeout(()=>{
            this.el.classList.remove('toast--visible')
        },3000)

    }
}

document.addEventListener('DOMContentLoaded',()=>toast.init());

//função para toggle menu

let check = document.querySelector('#check')
let sectionMenu = document.querySelector('.barra')
check.addEventListener('change', function (check) {
    console.log(check)
    if(this.checked){
        sectionMenu.classList.add('showmenu')
    }else{
        sectionMenu.classList.remove('showmenu')
    }
})
