function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros){
    let todosOsErros = "";

    for(const [key, value] of Object.entries(erros)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(",")}</div>`;
    }

if (todosOsErros) {
    showAlert(todosOsErros, "contatoMensagem");
}

}

/*document.getElementById('formContato').addEventListener('submit', function(e){
    e.preventDefault();

    var data = {
        nomeContato: document.getElementById('nomeContato').value,
        emailContato: document.getElementById('emailContato').value,
        assuntoContato: document.getElementById('assuntoContato').value,
        mensagemContato: document.getElementById('mensagemContato').value
    };

    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })

    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => {
                throw errorData;
            });
        }
        return response.json();
    })

    .then((data) => {
        if(data.success) {
        showAlert(
            `<div class="alert alert-success">${data.success}</div>`,
            'contatoMensagem');
        document.getElementById('formContato').reset();
    } else {
        showAlert(
            `<div class="alert alert-danger">Erro ao enviar email</div>`,
            "contatoMensagem"
        );
    }
    })


  .catch(error => {
    if (error.errors){
        displayError(error.errors);

    }else{
        console.log("Erro desconhecido", error);
    }
  })

});

function new_letters(e){
    e.preventDefault();
    e.stopPropagation();

    var data = {
        emailNews:document.getElementById("emailNews").value,

    };
    fetch("/contato/enviarNews",{
        method:"post",
        headers:{
            "content-type":"application/json",
            "X-CSRF-TOKEN":document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
        },
        body:JSON.stringify(data),
    })
    .then((response)=>{
        if(!response.ok){
            return response.json().then((errorData)=>{
                throw errorData;
            });
        }

        return response.json();
    })

    .then((data)=>{
        if(!data.ok){
            showAlert(
                `<div class="alert alert-danger"> erro ao enviar email.</div>`,
                "newsMensagem"
            );
        }
    })

    .catch((error)=> {
        if(error.errors){
            displayError(error.errors);
        } else {
            console.log("erro desconhecido", error);
        }
    });
}
*/


