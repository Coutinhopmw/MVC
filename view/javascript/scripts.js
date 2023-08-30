//btn-> nick
//btn-> key

function login(flag) {
    var login = document.getElementById('emailLogin').value;
    var key = document.getElementById('senhaLogin').value;
    
    if (flag!=true) {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Usuário ou senhas incorreta!',
        })
    }
}

