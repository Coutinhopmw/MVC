<?php
require_once "../model/main.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP/MVC/view/index.html");
curl_exec($curl);
curl_close($curl);

$control = new control();
$control->index();
class control{
    public function index(){
        $model = new banquinho();
        if(isset($_GET['enter'])){
            if(isset($_GET['slogin']) && !empty($_GET['slogin'])){
                $nick = $_GET['slogin'];
                if(isset($_GET['ssenha']) && !empty($_GET['ssenha'])){
                    $senha = $_GET['ssenha'];
                    if($model->busca($nick, $senha)==true){
                        header('Location: controlPanel3.php');
                        exit;
                    }else{
                        echo '<script type="text/JavaScript"> Swal.fire({icon: error, title: Erro, text: Usuário ou senhas incorreta!, }) </script>';
                    }
                }
            }else{
                echo 'email vazio';
            }
        }else{
            if(isset($_GET['RecSenha'])){
                header('Location: controlPanel2.php');
                exit;
            }
        }
    }

}
?>