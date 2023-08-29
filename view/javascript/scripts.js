//btn-> nick
//btn-> key

function login() {
    var login = document.getElementById('nick').value;
    var password = document.getElementById('key').value;

    if (login == "admin" && password == "admin") {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 100
          })
        location.href = 'register.html';
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Usuário ou senhas incorreta!',
        })
    }
}
