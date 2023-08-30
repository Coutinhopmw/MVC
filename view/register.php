<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/PHP/MVC/view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/PHP/MVC/view/css/style.css">
</head>

<body>
    <header>
        <div class="register-content">
            <div class="register-img">
                <img src="http://localhost/PHP/MVC/view/imagens/brasãoUFT_fundotransparente_RGB.png" alt="">
            </div>
            <div class="register-profile">
                <i class="fa-solid fa-user"></i>
                <a href="#">User Profile</a>
            </div>
        </div>
    </header>

    <section>
        <div class="mainLogin">
            <div class="register-conteiner">
                <div class="register-login">
                    <form class="row g-3 needs-validation" novalidate method="post" action="http://localhost/PHP/MVC/controller/controlPanel3.php">
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">User name</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name = "username" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Senha</label>
                            <input type="password" name = "userpass" class="form-control" id="key" value="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">E-mail</label>
                            <input type="text" name="useremail"  class="form-control" id="validationCustom02" value="" required>
                        </div>

                        <div class="col-12">
                            <input type="submit" name="enter" class="btn btn-primary" value="Cadastar"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="table-conteiner">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">senha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include_once "../model/main.php";
                        $model = new banquinho();
                        $result = $model->selector();
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<th scope='row'>".$i."</th>";
                            echo "<td>".$row['nome']."</td>";
                            echo  "<td>".$row['email']."</td>";
                            echo "<td>".$row['senha']."</td></tr>";
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="footer-conteiner">
        <div class="footer-class">
            <div class="img-footer">
                <img src="http://localhost/PHP/MVC/view/imagens/brasãoUFT_fundotransparente_RGB.png" alt="">
            </div>
            <div class="img-footer">
                <img src="http://localhost/PHP/MVC/view/imagens/logocurso.png" alt="">
            </div>
        </div>
        <div>
            <h5>DESENVOLVIDO POR CÁSSIO COUTINHO E LUIZ FELIPE, DISCIPLINA DE ENGENHARIA DE SOFTWARE</h5>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>

</html>