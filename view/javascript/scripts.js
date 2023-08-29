//btn-> nick
//btn-> key

function login() {
    var login = document.getElementById('nick').value;
    var key = document.getElementById('key').value;

    if (login == "admin" && key == "admin") {
        location.href = 'register.html';
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Usuário ou senhas incorreta!',
        })
    }
}

function password() {
    location.href = 'password.html';
}

