<?php
require_once "../model/main.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP/MVC/view/register.php");
curl_exec($curl);
curl_close($curl);

$control = new counter();
$control->index();

class counter{
    public function index(){
        $model = new banquinho();
        if(isset($_POST['enter'])){
            $flag = true;
            $_SESSION['enter'] = true;
            if(isset($_POST["useremail"]) && !empty($_POST["useremail"])){
                $email = $_POST["useremail"];
                if(isset($_POST['userpass']) && !empty($_POST['userpass'])){
                    $senha = $_POST['userpass'];
                    if(isset($_POST['username']) && !empty($_POST['username'])){
                        $nome = $_POST['username'];
                        if($model->resgistro($nome, $senha, $email, $flag)==true){
                            echo 'Inserido com sucesso';
                            $flag = false;
                            $_SESSION['enter'] = false;
                        }
                    }else{
                        echo 'Nome de usuário não informado';
                    }
                }else{
                    echo 'Senha vazia';
                }
            }else{
                echo $_POST['useremail'].'email vazio';
            }
        }else{
            
        }
    }
}
?>